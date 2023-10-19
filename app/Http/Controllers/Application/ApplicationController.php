<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    public function index()
    {
        $data = Applications::with('employer', 'jobs')->where('candidate_id', Auth::user()->id)->get();
        return view('user.app', [
            "page_name" => "Lamaran Saya",
            "data" => $data
        ]);
    }

    public function apply(Request $request)
    {
        $apply = Applications::create([
            'job_id' => $request->job_id,
            'employer_id' => $request->employer_id,
            'candidate_id' => Auth::user()->id,
            'note' => $request->note,
            'status' => 1,
        ]);

        if ($apply) {
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

}
