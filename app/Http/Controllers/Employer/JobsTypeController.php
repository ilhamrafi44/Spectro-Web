<?php

namespace App\Http\Controllers\Employer;

use App\Models\JobsType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsTypeController extends Controller
{
    public function index()
    {
        $data = JobsType::with('creator')->orderBy('id', 'desc')->get();
        return view('admin.master.jobs.type', [
            "page_name" => "Job Type Master",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new JobsType();
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
        $Category = JobsType::where('id', $id)->delete();
        if ($Category) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function update(Request $request)
    {
        $JobsType = JobsType::findOrFail($request->id);
        $JobsType->created_by = Auth::user()->id;
        $JobsType->name = $request->name;
        $update = $JobsType->update();

        if ($update) {
            return redirect()->back()->with('message', 'Data Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Data Berhasil Diubah');

    }
}
