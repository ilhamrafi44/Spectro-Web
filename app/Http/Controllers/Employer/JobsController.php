<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    function index()
    {
        return view('employer.job', [
            "page_name" => "Job List"
        ]);
    }
}
