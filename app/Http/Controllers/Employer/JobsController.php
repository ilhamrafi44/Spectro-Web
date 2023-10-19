<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Applications;
use App\Models\Jobs;
use App\Models\JobsCareerLevel;
use App\Models\JobsCategory;
use App\Models\JobsExperience;
use App\Models\JobsIndustry;
use App\Models\JobsPic;
use App\Models\JobsQualification;
use App\Models\JobsType;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function index()
    {
        $data = Jobs::all();
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $location = Jobs::distinct()->get(['location_id']);

        return view('jobs.index', [
            "page_name" => "Cari Kerja",
            'category' => $category,
            'industry' => $industry,
            'type' => $type,
            'qualification' => $qualification,
            'location' => $location,
            "data" => $data
        ]);
    }

    public function myjob()
    {
        $data = Jobs::where('user_id', Auth::user()->id)->get();
        return view('employer.job', [
            "page_name" => "Job List Saya",
            "data" => $data
        ]);
    }

    public function detail(int $id)
    {
        $check = 0;

        if(Auth::user()){
            $check = Applications::where('candidate_id', Auth::user()->id)->where('job_id', $id)->count();
        }

        $job = Jobs::with('category', 'industry', 'user', 'qualifications', 'job_types', 'experiences', 'careers')->where('id', $id)->first();
        $pics = JobsPic::with('karyawan')->where('job_id', $id)->get();
        return view('jobs.detail', [
            'page_name' => "Job Detail",
            'data' => $job,
            'pics' => $pics,
            'check' => $check
        ]);
    }

    public function add()
    {
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $career = JobsCareerLevel::all();
        $experience = JobsExperience::all();
        $karyawan = Karyawan::where('user_id', Auth::user()->id)->get();
        return view('employer.jobs.add', [
            "page_name" => "Job List",
            "category" => $category,
            "industry" => $industry,
            'karyawan' => $karyawan,
            'type' => $type,
            'qualification' => $qualification,
            'career' => $career,
            'experience' => $experience,
        ]);
    }

    function store(Request $request)
    {
        $job = Jobs::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'link' => $request->link,
            'category_id' => $request->category_id,
            'industry_id' => $request->industry_id,
            'location_id' => $request->location_id,
            'deskripsi' => $request->deskripsi,
            'jumlah_kandidat' => $request->jumlah_kandidat,
            'kualifikasi' => $request->kualifikasi,
            'career_level' => $request->career_level,
            'job_type' => $request->job_type,
            'experience' => $request->experience,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hari_libur' => $request->hari_libur,
            'waktu_istirahat' => $request->waktu_istirahat,
            'waktu_kerja' => $request->waktu_kerja,
            'catatan' => $request->catatan,
            'salary' => $request->salary,
            'salary_type' => $request->salary_type,
            'info_gaji' => $request->info_gaji,
            'total_tunjangan' => $request->total_tunjangan,
            'info_tunjangan' => $request->info_tunjangan,
            'expired_date' => $request->expired_date,
            'mata_gaji' => $request->mata_gaji,
            'mata_tunjangan' => $request->mata_tunjangan
        ]);

        $pic = JobsPic::create([
            'job_id' => $job->id,
            'pic_id' => $request->pic_1
        ]);

        if($request->pic_2 > 0)
        {
            $pic = JobsPic::create([
                'job_id' => $job->id,
                'pic_id' => $request->pic_2
            ]);
        }

        if ($job) {
            return redirect()->back()->with('message', 'Job Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Job Berhasil Ditambah');
    }
}
