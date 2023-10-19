<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Models\JobsCareerLevel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsCareerLevelController extends Controller
{
    public function index()
    {
        $data = JobsCareerLevel::with('creator')->orderBy('id', 'desc')->get();
        return view('admin.master.jobs.careerlevel', [
            "page_name" => "Job Career Level List",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new JobsCareerLevel();
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
        $Category = JobsCareerLevel::where('id', $id)->delete();
        if ($Category) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function update(Request $request)
    {
        $JobsCareerLevel = JobsCareerLevel::findOrFail($request->id);
        $JobsCareerLevel->created_by = Auth::user()->id;
        $JobsCareerLevel->name = $request->name;
        $update = $JobsCareerLevel->update();

        if ($update) {
            return redirect()->back()->with('message', 'Data Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Data Berhasil Diubah');

    }
}
