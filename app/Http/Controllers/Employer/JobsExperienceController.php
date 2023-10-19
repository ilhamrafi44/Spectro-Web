<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Models\JobsExperience;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsExperienceController extends Controller
{
    public function index()
    {
        $data = JobsExperience::with('creator')->orderBy('id', 'desc')->get();
        return view('admin.master.jobs.experience', [
            "page_name" => "Job Experience Master",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new JobsExperience();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $saved = $data->save();
        if ($saved) {
            return redirect()->back()->with('message', 'Data Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Data Berhasil Ditambah');
    }

    public function destroy(string $id)
    {
        $Category = JobsExperience::where('id', $id)->delete();
        if ($Category) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function update(Request $request)
    {
        $JobsExperience = JobsExperience::findOrFail($request->id);
        $JobsExperience->created_by = Auth::user()->id;
        $JobsExperience->name = $request->name;
        $update = $JobsExperience->update();

        if ($update) {
            return redirect()->back()->with('message', 'Data Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Data Berhasil Diubah');

    }
}
