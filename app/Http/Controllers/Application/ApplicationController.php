<?php

namespace App\Http\Controllers\Application;

use App\Models\Jobs;
use App\Models\JobsType;
use App\Models\Applications;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use App\Models\JobsQualification;
use App\Http\Controllers\Controller;
use App\Models\PrivateNotification;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    public function index(Request $request)
    {
        $order = 'desc';
        if ($request->filled('direction')) {
            $order = $request->input('direction');
        }
        $perPage = 10; // Jumlah item per halaman, dapat disesuaikan sesuai kebutuhan Anda
        if ($request->filled('per_page')) {
            $perPage = $request->input('per_page');
        }
        // Simpan data pencarian dalam sesi
        $request->flash();

        $results = Applications::where('candidate_id', Auth::user()->id)
            ->whereHas('jobs', function ($query) use ($request) {
                if ($request->filled('category_id')) {
                    $query->where('category_id', $request->input('category_id'));
                }

                if ($request->filled('location_id')) {
                    $query->where('location_id', $request->input('location_id'));
                }

                if ($request->filled('industry_id')) {
                    $query->where('industry_id', $request->input('industry_id'));
                }
            })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());

        // $data = Applications::with('employer', 'jobs')->where('candidate_id', Auth::user()->id)->get();
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $location = Jobs::distinct()->get(['location_id']);
        return view('user.app', [
            "page_name" => "Lamaran Saya",
            'category' => $category,
            'industry' => $industry,
            'type' => $type,
            'qualification' => $qualification,
            'location' => $location,
            "data" => $results
        ]);
    }

    public function employer(Request $request)
    {
        $order = 'desc';
        if ($request->filled('direction')) {
            $order = $request->input('direction');
        }
        $perPage = 10; // Jumlah item per halaman, dapat disesuaikan sesuai kebutuhan Anda
        if ($request->filled('per_page')) {
            $perPage = $request->input('per_page');
        }
        // Simpan data pencarian dalam sesi
        $request->flash();

        $results = Applications::where('employer_id', Auth::user()->id)
            ->whereHas('candidate', function ($query) use ($request) {
                if ($request->filled('name')) {
                    $query->where('name', 'like', '%' . $request->input('name') . '%');
                }
            })->whereHas('jobs', function ($query) use ($request) {
                if ($request->filled('job_id')) {
                    $query->where('id', $request->input('job_id'));
                }
            })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());

        $data_job = Jobs::where('user_id', Auth::user()->id)->get();
        return view('employer.app.index', [
            "page_name" => "Pelamar Saya",
            'data_job' => $data_job,
            "data" => $results
        ]);
    }

    public function apply(Request $request)
    {
        $apply = Applications::firstOrCreate([
            'job_id' => $request->job_id,
            'employer_id' => $request->employer_id,
            'candidate_id' => Auth::user()->id,
            'note' => $request->note,
            'status' => 1,
        ]);

        if ($apply) {
            $jobs = Jobs::findOrFail($request->job_id);
            PrivateNotification::create([
                'from_id' => $request->employer_id,
                'to_id' => Auth::user()->id,
                'subject' => "Berhasil menambahkan lamaran",
                'message' => "Berhasil melamar pada pekerjaan $jobs->name.",
            ]);
            return redirect()->back()->with('message', 'Job Berhasil Dilamar');
        }
        return redirect()->back()->with('error', 'Job Berhasil Dilamar');
    }

    public function cancelss(string $id)
    {
        $apply = Applications::findOrFail($id);
        $apply->status = 4;
        $update = $apply->update();

        if ($update) {
            return redirect()->back()->with('message', 'Job Berhasil Dibatalkan');
        }
        return redirect()->back()->with('error', 'Job Berhasil Dibatalkan');
    }

    public function approves(string $id)
    {
        $apply = Applications::findOrFail($id);
        $apply->status = 2;
        $update = $apply->update();

        if ($update) {
            $jobs = Jobs::findOrFail($apply->job_id);
            PrivateNotification::create([
                'from_id' => $apply->employer_id,
                'to_id' => $apply->candidate_id,
                'subject' => "Anda telah diterima",
                'message' => "Anda telah diterima pada pekerjaan $jobs->name.",
            ]);
            return redirect()->back()->with('message', 'Job Berhasil di Approve');
        }
        return redirect()->back()->with('error', 'Job Berhasil di Approve');
    }
    public function rejects(string $id)
    {
        $apply = Applications::findOrFail($id);
        $apply->status = 3;
        $update = $apply->update();

        if ($update) {
            $jobs = Jobs::findOrFail($apply->job_id);
            PrivateNotification::create([
                'from_id' => $apply->employer_id,
                'to_id' => $apply->candidate_id,
                'subject' => "Anda telah ditolak",
                'message' => "Anda telah ditolak pada pekerjaan $jobs->name.",
            ]);
            return redirect()->back()->with('message', 'Job Berhasil Direject');
        }
        return redirect()->back()->with('error', 'Job Berhasil Direject');
    }
}
