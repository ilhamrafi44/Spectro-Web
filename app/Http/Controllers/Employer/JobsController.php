<?php

namespace App\Http\Controllers\Employer;

use App\Models\Jobs;
use App\Models\User;
use App\Models\JobsPic;
use App\Models\JobsType;
use App\Models\JobViews;
use App\Models\Karyawan;
use App\Models\SavedJobs;
use App\Exports\JobsExport;
use App\Models\Applications;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use App\Models\JobsExperience;
use App\Models\JobsCareerLevel;
use App\Models\JobsQualification;
use App\Http\Controllers\Controller;
use App\Models\SswFlowMaster;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $query = Jobs::query();

        $queryParams = $request->query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('industry_id')) {
            $query->where('industry_id', $request->input('industry_id'));
        }

        if ($request->filled('location_id')) {
            $query->where('location_id', $request->input('location_id'));
        }

        $orderBy = 'created_at';
        $direction = 'asc'; // Default direction

        if ($request->filled('direction') && in_array($request->input('direction'), ['asc', 'desc'])) {
            $direction = $request->input('direction');
        }

        $query->orderBy($orderBy, $direction);

        $perPage = 10;

        if ($request->has('per_page')) {
            $perPage = $request->input('per_page');
        }

        $results = $query->paginate($perPage)->appends($queryParams);

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
            "data" => $results
        ]);
    }


    public function myjob(Request $request)
    {
        $query = Jobs::query();

        $queryParams = $request->query();

        $query->where('user_id', Auth::user()->id);

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $orderBy = 'created_at';
        $direction = 'asc'; // Default direction

        if ($request->filled('direction') && in_array($request->input('direction'), ['asc', 'desc'])) {
            $direction = $request->input('direction');
        }

        $query->orderBy($orderBy, $direction);

        $perPage = 10;

        if ($request->has('per_page')) {
            $perPage = $request->input('per_page');
        }

        $results = $query->paginate($perPage)->appends($queryParams);

        $data = Jobs::where('user_id', Auth::user()->id)->get();
        return view('employer.job', [
            "page_name" => "Job List Saya",
            "data" => $results
        ]);
    }

    public function admin(Request $request)
    {
        $query = Jobs::query();

        $queryParams = $request->query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('employer')) {
            $query->where('user_id', $request->input('employer'));
        }

        $orderBy = 'created_at';
        $direction = 'asc'; // Default direction

        if ($request->filled('direction') && in_array($request->input('direction'), ['asc', 'desc'])) {
            $direction = $request->input('direction');
        }

        $query->orderBy($orderBy, $direction);

        $perPage = 10;

        if ($request->has('per_page')) {
            $perPage = $request->input('per_page');
        }

        $results = $query->paginate($perPage)->appends($queryParams);

        $data = Jobs::where('user_id', Auth::user()->id)->get();
        $employer = User::where('role', 2)->get();
        return view('admin.job', [
            "page_name" => "Job List Semua",
            "data" => $results,
            'employer' => $employer,
            'rute_export' => 'jobs.export'
        ]);
    }

    public function detail(Request $request)
    {
        $check = 0;
        $check_saved = 0;

        if (Auth::user()) {
            $check = Applications::where('candidate_id', Auth::user()->id)
                ->whereIn('status', [1, 2, 3])
                ->first();
            $check_saved = SavedJobs::where('user_id', Auth::user()->id)->where('job_id', $request->id)->count();
        }

        $related = Jobs::with('category', 'industry', 'user', 'qualifications', 'job_types', 'experiences', 'careers')->where('id', '!=', $request->id)->limit(5)->get();

        $job = Jobs::with('category', 'industry', 'user', 'qualifications', 'job_types', 'experiences', 'careers')->where('id', $request->id)->first();

        if ($job) {
            JobViews::firstOrCreate([
                'job_id' => $request->id,
                'ip' => $request->ip()
            ]);
        }

        $pics = JobsPic::with('karyawan')->where('job_id', $request->id)->get();
        return view('jobs.detail', [
            'page_name' => "Job Detail",
            'data' => $job,
            'pics' => $pics,
            'related' => $related,
            'check' => $check,
            'check_saved' => $check_saved,
        ]);
    }

    public function add()
    {
        if (Auth::user()->role == 2 && Auth::user()->can_create_job == 0) {
            return redirect()->back()->with('error', 'Anda belum diizinkan untuk membuat pekerjaan');
        }
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $career = JobsCareerLevel::all();
        $experience = JobsExperience::all();
        $location = Jobs::distinct()->get(['location_id']);
        $karyawan = Karyawan::where('user_id', Auth::user()->id)->get();
        return view('employer.jobs.add', [
            "page_name" => "Job Create",
            "category" => $category,
            "industry" => $industry,
            'karyawan' => $karyawan,
            'type' => $type,
            'qualification' => $qualification,
            'career' => $career,
            'experience' => $experience,
            'location_available' => $location
        ]);
    }

    public function ShowEmployer()
    {
        $data = User::where('role', 2)->get();
        return view('admin.employer', [
            'page_name' =>  'Pilih Employer',
            'data' => $data
        ]);
    }

    public function AdminAdd(Request $request)
    {
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $career = JobsCareerLevel::all();
        $experience = JobsExperience::all();
        $location = Jobs::distinct()->get(['location_id']);
        $karyawan = Karyawan::where('user_id', $request->id)->get();
        return view('admin.jobs.add', [
            "page_name" => "Job Create",
            "category" => $category,
            "industry" => $industry,
            'karyawan' => $karyawan,
            'type' => $type,
            'qualification' => $qualification,
            'career' => $career,
            'experience' => $experience,
            'location_available' => $location,
            'user_id' => $request->id
        ]);
    }

    function store(Request $request)
    {
        $job = Jobs::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
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

        if ($request->pic_2 > 0) {
            $pic = JobsPic::create([
                'job_id' => $job->id,
                'pic_id' => $request->pic_2
            ]);
        }

        if ($job) {
            return redirect()->back()->with('message', 'Job Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Job Gagal Ditambah');
    }

    public function update($id)
    {
        $data = Jobs::where('user_id', Auth::user()->id)->where('id', $id)->first();
        $karyawan = Karyawan::where('user_id', Auth::user()->id)->get();
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $career = JobsCareerLevel::all();
        $experience = JobsExperience::all();
        $location = Jobs::distinct()->get(['location_id']);
        $karyawan = Karyawan::where('user_id', Auth::user()->id)->get();
        return view('employer.jobs.update', [
            'page_name' => "Update Lowongan",
            'data' => $data,
            'karyawan' => $karyawan,
            'category' => $category,
            'industry' => $industry,
            'type' => $type,
            'qualification' => $qualification,
            'career' => $career,
            'experience' => $experience,
            'location_available' => $location
        ]);
    }

    public function updates(Request $request)
    {
        $id = $request->id;
        if (Auth::user()->role != 3) {
            $job = Jobs::where('id', $id)->where('user_id', Auth::user()->id)->first();
        } else {
            $job = Jobs::where('id', $id)->first();
        }
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
        $job->mata_gaji = $request->mata_gaji;
        $job->mata_tunjangan = $request->mata_tunjangan;
        $job->update();

        $pic1 = JobsPic::where('job_id', $id)->first();
        $pic1->pic_id = $request->pic_1;
        $pic1->update();

        if ($request->pic_2 > 0) {
            $pic2 = JobsPic::where('job_id', $id)->where('id', '<>', $pic1->id)->first();
            if ($pic2) {
                $pic2->pic_id = $request->pic_2;
                $pic2->update();
            } else {
                JobsPic::create([
                    'job_id' => $id,
                    'pic_id' => $request->pic_2
                ]);
            }
        }
        return redirect()->back()->with('message', 'Data Berhasil Di Ubah');
    }

    public function Adminupdate($id)
    {
        $data = Jobs::where('id', $id)->first();
        $karyawan = Karyawan::where('user_id', $data->user->id)->get();
        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $career = JobsCareerLevel::all();
        $experience = JobsExperience::all();
        $location = Jobs::distinct()->get(['location_id']);
        return view('employer.jobs.update', [
            'page_name' => "Update Lowongan",
            'data' => $data,
            'karyawan' => $karyawan,
            'category' => $category,
            'industry' => $industry,
            'type' => $type,
            'qualification' => $qualification,
            'career' => $career,
            'experience' => $experience,
            'location_available' => $location
        ]);
    }

    public function Adminupdates(Request $request)
    {
        $id = $request->id;
        $job = Jobs::where('id', $id)->first();
        $job->name = $request->name;
        $job->user_id = Auth::user()->id;
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
        $job->mata_gaji = $request->mata_gaji;
        $job->mata_tunjangan = $request->mata_tunjangan;
        $job->update();

        $pic1 = JobsPic::where('job_id', $id)->first();
        $pic1->pic_id = $request->pic_1;
        $pic1->update();

        if ($request->pic_2 > 0) {
            $pic2 = JobsPic::where('job_id', $id)->where('id', '<>', $pic1->id)->first();
            if ($pic2) {
                $pic2->pic_id = $request->pic_2;
                $pic2->update();
            } else {
                JobsPic::create([
                    'job_id' => $id,
                    'pic_id' => $request->pic_2
                ]);
            }
        }
        return redirect()->back()->with('message', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        if (Auth::user()->role !== 3) {

            $job = Jobs::where('id', $id)->where('user_id', Auth::user()->id)->delete();
            if ($job) {
                Applications::where('job_id', $id)->delete();
                SswFlowMaster::where('job_id', $id)->delete();
                return redirect()->back()->with('message', 'Data Berhasil Dihapus');
            }
        } else {
            $job = Jobs::where('id', $id)->delete();
            if ($job) {
                Applications::where('job_id', $id)->delete();
                SswFlowMaster::where('job_id', $id)->delete();
                return redirect()->back()->with('message', 'Data Berhasil Dihapus');
            }
        }
        return redirect()->back()->with('error', 'Data Gagal Dihapus');
    }

    public function export()
    {
        return Excel::download(new JobsExport, 'jobs.xlsx');
    }
}
