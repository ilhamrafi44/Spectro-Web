<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    function index()
    {
        $data = Jobs::all();
        return view('employer.job', [
            "page_name" => "Job List Saya",
            "data" => $data
        ]);
    }

    function add()
    {
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        return view('employer.jobs.add', [
            "page_name" => "Job List",
            "category" => $category,
            "industry" => $industry,
        ]);
    }

    function store(Request $request)
    {
        $job = new Jobs();
        $job->name = $request->name;
        $saved = $job->save();
        if ($saved) {
            return redirect()->back()->with('message', 'Job Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Job Berhasil Ditambah');
    }

}
