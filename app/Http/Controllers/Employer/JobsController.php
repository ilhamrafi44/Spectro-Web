<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $job->user_id = Auth::user()->id;
        $job->name = $request->name;
        $job->link = $request->link;
        $job->category_id = $request->category_id;
        $job->industry_id = $request->industry_id;
        $job->location_id = $request->location_id;
        $job->deskripsi = $request->deskripsi;
        $job->jumlah_kandidat = $request->jumlah_kandidat;
        $job->kualifikasi = $request->kualifikasi;
        $job->career_level = $request->career_level;
        $job->job_type = $request->job_type;
        $job->experience = $request->experience;
        $job->jenis_kelamin = $request->jenis_kelamin;
        $job->hari_libur = $request->hari_libur;
        $job->waktu_istirahat = $request->waktu_istirahat;
        $job->waktu_kerja = $request->waktu_kerja;
        $job->catatan = $request->catatan;
        $job->salary = $request->salary;
        $job->salary_type = $request->salary_type;
        $job->info_gaji = $request->info_gaji;
        $job->total_tunjangan = $request->total_tunjangan;
        $job->info_tunjangan = $request->info_tunjangan;
        $job->expired_date = $request->expired_date;
        $saved = $job->save();
        if ($saved) {
            return redirect()->back()->with('message', 'Job Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Job Berhasil Ditambah');
    }
}
