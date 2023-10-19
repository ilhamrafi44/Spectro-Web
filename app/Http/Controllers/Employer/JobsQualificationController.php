<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Models\JobsQualification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsQualificationController extends Controller
{
    public function index()
    {
        $data = JobsQualification::with('creator')->orderBy('id', 'desc')->get();
        return view('admin.master.jobs.qualification', [
            "page_name" => "Job Qualification Master",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new JobsQualification();
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
        $Category = JobsQualification::where('id', $id)->delete();
        if ($Category) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function update(Request $request)
    {
        $JobsQualification = JobsQualification::findOrFail($request->id);
        $JobsQualification->created_by = Auth::user()->id;
        $JobsQualification->name = $request->name;
        $update = $JobsQualification->update();

        if ($update) {
            return redirect()->back()->with('message', 'Data Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Data Berhasil Diubah');

    }
}
