<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsIndustryController extends Controller
{
    function index()
    {
        $data = JobsIndustry::with('creator')->orderBy('id', 'desc')->get();
        return view('employer.industries', [
            "page_name" => "Job Industri List",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new JobsIndustry();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $saved = $data->save();
        if ($saved) {
            return redirect()->back()->with('message', 'Industry Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Industry Berhasil Ditambah');


    }

    public function destroy(string $id)
    {
        $Industry = JobsIndustry::where('id', $id)->delete();
        if ($Industry) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function update(Request $request)
    {
        $JobsIndustry = JobsIndustry::findOrFail($request->id);
        $JobsIndustry->created_by = Auth::user()->id;
        $JobsIndustry->name = $request->name;
        $update = $JobsIndustry->update();

        if ($update) {
            return redirect()->back()->with('message', 'Industry Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Industry Berhasil Diubah');

    }


}
