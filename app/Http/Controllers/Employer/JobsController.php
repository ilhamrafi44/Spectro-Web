<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    function index()
    {
        return view('employer.job', [
            "page_name" => "Job List"
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
}
