<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
use App\Models\JobsIndustry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Support\Facades\Auth;

class JobsIndustryController extends Controller
{
    function index(Request $request)
    {
        $query = JobsIndustry::query();

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

        return view('employer.industries', [
            "page_name" => "Job Industri List",
            "data" => $results
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
        $industry = JobsIndustry::where('id', $id)->first();
        $jobs = Jobs::where('industry_id', $id)->first();
        if ($industry) {
            if ($jobs) {
                return redirect()->back()->with('message', 'Data Gagal Dihapus,Ada job yang terhubung');
            }
            $industry->delete();
            return redirect()->back()->with('message', 'Data Berhasil Dihapus');
        }
        return redirect()->back()->with('message', 'Data Gagal Dihapus');
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
