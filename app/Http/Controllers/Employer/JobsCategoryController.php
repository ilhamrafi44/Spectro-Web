<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\JobsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsCategoryController extends Controller
{
    public function index()
    {
        $data = JobsCategory::all();
        return view('employer.category', [
            "page_name" => "Job Category List",
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new JobsCategory();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $saved = $data->save();
        if ($saved) {
            return redirect()->back()->with('message', 'Category Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Category Berhasil Ditambah');
    }

    public function destroy(string $id)
    {
        $Category = JobsCategory::where('id', $id)->delete();
        if ($Category) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
}
