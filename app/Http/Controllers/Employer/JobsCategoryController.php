<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\JobsCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsCategoryController extends Controller
{
    public function index()
    {
        $data = JobsCategory::with('creator')->orderBy('id', 'desc')->get();
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

    public function update(Request $request)
    {
        $JobsCategory = JobsCategory::findOrFail($request->id);
        $JobsCategory->created_by = Auth::user()->id;
        $JobsCategory->name = $request->name;
        $update = $JobsCategory->update();

        if ($update) {
            return redirect()->back()->with('message', 'Category Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Category Berhasil Diubah');

    }

}
