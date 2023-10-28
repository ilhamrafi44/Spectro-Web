<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\JobViews;
use App\Models\ProfileViews;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $page_name = 'Dashboard';
        $job = Jobs::all()->count();
        $user = User::all()->count();
        $profile_views = ProfileViews::all()->count();
        $job_views = JobViews::all()->count();
        return view('admin.home', [
            'page_name' => $page_name,
            'job' => $job,
            'user' => $user,
            'profile_views' => $profile_views,
            'job_views' => $job_views
        ]);
    }
}
