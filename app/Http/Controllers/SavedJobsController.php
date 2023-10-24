<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\JobsType;
use App\Models\SavedJobs;
use App\Models\JobsCategory;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\JobsQualification;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SavedJobsController extends Controller
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

        $results = SavedJobs::where('user_id', Auth::user()->id)
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

        $category = JobsCategory::all();
        $industry = JobsIndustry::all();
        $type = JobsType::all();
        $qualification = JobsQualification::all();
        $location = Jobs::distinct()->get(['location_id']);
        return view('user.savedjobs', [
            "page_name" => "Pekerjaan Disimpan",
            'category' => $category,
            'industry' => $industry,
            'type' => $type,
            'qualification' => $qualification,
            'location' => $location,
            "data" => $results
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::user()) {
            $data = SavedJobs::firstOrCreate([
                'job_id' => $request->job_id,
                'user_id' => Auth::user()->id
            ]);

            if ($data) {
                return response()->json(['status' => 'success', 'data' => 'Sukses Menambahkan Job ke list.']);
            } else {
                return response()->json(['status' => 'error', 'data' => 'Gagal Menambahkan Job ke list.']);
            }
        } else {
            return response()->json(['status' => 'error', 'data' => 'Gagal Menambahkan Job ke list, Silahkan Login terlebih dahulu.']);
        }
    }

    public function destroy(string $id)
    {
        $data = SavedJobs::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()->back()->with('message', 'Berhasil Hapus Data');
        } else {
            return redirect()->back()->with('message', 'Gagal Hapus Data');
        }
    }

    public function delete(Request $data)
    {
        $data = SavedJobs::where('job_id', $data->job_id)->first();
        $data->delete();

        if ($data) {
            return response()->json(['status' => 'success', 'data' => 'Sukses Menghapus Job list.']);
        } else {
            return response()->json(['status' => 'error', 'data' => 'Gagal Menghapus Job list.']);
        }
    }
}
