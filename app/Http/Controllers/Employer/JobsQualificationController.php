<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Models\JobsQualification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JobsQualificationController extends Controller
{
    public function index(Request $request)
    {
        $query = JobsQualification::query();

        $queryParams = $request->query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $orderBy = 'created_at';
        $direction = 'asc'; // Default direction

        if ($request->filled('direction') && in_array($request->input('direction'), ['asc', 'desc'])) {
            $direction = $request->input('direction');
        }

        $query->orderBy($orderBy, $direction);

        $perPage = 10;

        if ($request->has('per_page')) {
            $perPage = $request->input('per_page');
        }

        $results = $query->paginate($perPage)->appends($queryParams);

        return view('admin.master.jobs.qualification', [
            "page_name" => "Job Qualification Master",
            "data" => $results
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
