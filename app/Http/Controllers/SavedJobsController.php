<?php

namespace App\Http\Controllers;

use App\Models\SavedJobs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SavedJobsController extends Controller
{
    public function index()
    {
        $data = SavedJobs::with('jobs')->where('user_id', Auth::user()->id)->get();

        return view('user.jobs.saved', [
            'page_name' => 'Saved Jobs',
            'data' => $data
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
                return response()->json(['success'=>'Sukses Menambahkan Job ke list.']);
            } else {
                return response()->json(['error'=>'Gagal Menambahkan Job ke list.']);
            }
        } else {
            return response()->json(['error'=>'Gagal Menambahkan Job ke list.']);
        }
    }

    public function delete(Request $data)
    {
        $data = SavedJobs::where('job_id', $data->job_id)->first();
        $data->delete();

        if ($data) {
            return response()->json(['success'=>'Sukses Menghapus Job list.']);
        } else {
            return response()->json(['error'=>'Gagal Menghapus Job list.']);
        }
    }
}
