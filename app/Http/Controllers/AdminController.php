<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Jobs;
use App\Models\User;
use App\Models\JobViews;
use App\Models\JobsCategory;
use App\Models\ProfileViews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    private function registrationChart($startDate = null, $endDate = null)
    {
        $query = User::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, role, COUNT(*) as count')
            ->whereIn('role', [1, 2])
            ->groupBy('year', 'month', 'role')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc');

        if ($startDate && $endDate) {
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        $monthlyRoleCounts = $query->get();

        $monthlyRoleData = [];
        foreach ($monthlyRoleCounts as $data) {
            $roleName = $data->role == 1 ? 'Candidate' : 'Employer';
            $monthYear = date('M Y', strtotime("{$data->year}-{$data->month}-01"));

            if (!isset($monthlyRoleData[$monthYear])) {
                $monthlyRoleData[$monthYear] = [
                    'MonthYear' => $monthYear,
                    'Candidate' => 0,
                    'Employer' => 0,
                ];
            }

            $monthlyRoleData[$monthYear][$roleName] += $data->count;
        }

        $finalChartData = array_values($monthlyRoleData);

        return $finalChartData;
    }

    private function getTopJobViews()
    {
        $topJobViews = DB::table('job_views')
            ->select('jobs.id', 'jobs.name', DB::raw('COUNT(job_views.job_id) as total_views'))
            ->join('jobs', 'jobs.id', '=', 'job_views.job_id')
            ->groupBy('jobs.id', 'jobs.name')
            ->orderByDesc('total_views')
            ->limit(10)
            ->get();

        return $topJobViews;
    }
    private function getTopJobApp()
    {
        $topJobViews = DB::table('applications')
            ->select('jobs.id', 'jobs.name', DB::raw('COUNT(applications.job_id) as total_app'))
            ->join('jobs', 'jobs.id', '=', 'applications.job_id')
            ->groupBy('jobs.id', 'jobs.name')
            ->orderByDesc('total_app')
            ->limit(10)
            ->get();

        return $topJobViews;
    }

    private function getTopProfileViews()
    {
        $topProfileViews = DB::table('profile_views')
            ->select('users.id', 'users.name', 'users.role', DB::raw('COUNT(profile_views.user_id) as total_views'))
            ->join('users', 'users.id', '=', 'profile_views.user_id')
            ->groupBy('users.id', 'users.name', 'users.role')
            ->orderByDesc('total_views')
            ->limit(10)
            ->get();

        return $topProfileViews;
    }


    public function index(Request $request)
    {
        $page_name = 'Dashboard';
        $job = Jobs::all()->count();
        $user = User::all()->count();
        $profile_views = ProfileViews::all()->count();
        $job_views = JobViews::all()->count();
        $startDate = @$request->start;
        $endDate = @$request->end;
        if ($startDate && $endDate) {
            $registrationChart = $this->registrationChart($startDate, $endDate);
        } else {
            $registrationChart = $this->registrationChart();
        }
        $top_job = $this->getTopJobViews();
        $top_profile = $this->getTopProfileViews();
        $top_app = $this->getTopJobApp();

        $candidateCount = User::where('role', 1)->count();
        $employerCount = User::where('role', 2)->count();

        $verifiedUserCount = User::whereNotNull('email_verified_at')->count();
        $unverifiedUserCount = User::whereNull('email_verified_at')->count();


        return view('admin.home', [
            'page_name' => $page_name,
            'job' => $job,
            'user' => $user,
            'profile_views' => $profile_views,
            'job_views' => $job_views,
            'chartData' => $registrationChart,
            'topJobViews' => $top_job,
            'topProfileViews' => $top_profile,
            'candidateCount' => $candidateCount,
            'employerCount' => $employerCount,
            'verifiedUserCount' => $verifiedUserCount,
            'unverifiedUserCount' => $unverifiedUserCount,
            'topJobApp' => $top_app,
        ]);
    }
}
