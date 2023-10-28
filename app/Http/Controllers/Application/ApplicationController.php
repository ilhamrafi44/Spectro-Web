<?php

namespace App\Http\Controllers\Application;

use Carbon\Carbon;
use App\Models\Jobs;
use App\Models\User;
use App\Mail\ApplyMail;
use App\Models\JobsType;
use App\Mail\EmployerMail;
use App\Models\Applications;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use App\Models\SswFlowMaster;
use App\Models\JobsQualification;
use App\Models\PrivateNotification;
use App\Http\Controllers\Controller;
use App\Mail\Approve;
use App\Mail\Reject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function admin(Request $request)
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

        $results = Applications::whereHas('candidate', function ($query) use ($request) {
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

        $data_job = Jobs::all();
        return view('admin.app.index', [
            "page_name" => "Semua Pelamar",
            'data_job' => $data_job,
            "data" => $results
        ]);
    }

    public function apply(Request $request)
    {
        // Ambil data dari tiga tabel berdasarkan relasi
        $data0 = User::find(Auth::user()->id);

        if ($data0->role == 2) {
            return redirect()->back()->with('error', 'Employer tidak bisa melamar pekerjaan');
        }

        $data1 = $data0->candidate_profile;
        $data2 = $data0->candidate_resume;

        // Hitung jumlah kolom yang terisi dari ketiga tabel
        $jumlahKolomTerisi = 0;
        $jumlahTotalKolom = 0;

        // Hitung untuk tabel pertama
        foreach ($data1?->toArray() as $key => $value) {
            if ($value !== null) {
                $jumlahKolomTerisi++;
            }
            $jumlahTotalKolom++;
        }

        if ($data2 == !null) {
            // Hitung untuk tabel kedua
            foreach ($data2?->toArray() as $key => $value) {
                if ($value !== null) {
                    $jumlahKolomTerisi++;
                }
                $jumlahTotalKolom++;
            }
        }

        // Hitung persentase data yang terisi
        if ($jumlahTotalKolom > 0) {
            $persentaseDataTerisi = ($jumlahKolomTerisi / $jumlahTotalKolom) * 100;
            $check_complete = round($persentaseDataTerisi);
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan');
        }

        // if($check_complete < 85)
        // {
        //     return redirect()->back()->with('error', 'Data profile dibawah 85%, silahkan lengkapi terlebih dahulu.');
        // }

        $jobs = Jobs::findOrFail($request->job_id);

        $expired_date = Carbon::parse($jobs->expired_date);

        if ($expired_date->isPast()) {
            // Lakukan operasi pembatalan di sini
            // Contoh: Batalkan pesanan atau tindakan lainnya
            return redirect()->back()->with('error', 'Operasi dibatalkan karena tanggal kadaluarsa telah lewat.');
        }

        $apply = Applications::firstOrCreate([
            'job_id' => $request->job_id,
            'employer_id' => $request->employer_id,
            'candidate_id' => Auth::user()->id,
            'note' => $request->note,
            'status' => 1,
        ]);

        if ($apply) {
            PrivateNotification::create([
                'from_id' => $request->employer_id,
                'to_id' => Auth::user()->id,
                'subject' => "Berhasil menambahkan lamaran",
                'message' => "Berhasil melamar pada pekerjaan $jobs->name.",
            ]);

            Mail::to($data0->email)->send(new ApplyMail($apply));

            $employer = User::findOrFail($request->employer_id);

            Mail::to($employer->email)->send(new EmployerMail($apply));

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

            SswFlowMaster::create([
                'job_id' => $apply->job_id,
                'employer_id' => $apply->employer_id,
                'candidate_id' => $apply->employer_id,
                'level' => 1
            ]);

            Mail::to($apply->candidate->email)->send(new Approve($apply));

            return redirect()->back()->with('message', 'Job Berhasil di Approve');
        }
        return redirect()->back()->with('error', 'Job Gagal di Approve');
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

            Mail::to($apply->candidate->email)->send(new Reject($apply));

            return redirect()->back()->with('message', 'Job Berhasil Direject');
        }
        return redirect()->back()->with('error', 'Job Gagal Direject');
    }
}
