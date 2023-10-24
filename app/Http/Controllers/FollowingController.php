<?php

namespace App\Http\Controllers;

use App\Models\Following;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{

    public function index(Request $request)
    {
        $order = 'desc';
        if ($request->filled('direction')) {
            $order = $request->input('direction');
        }
        $perPage = 10; // Jumlah item per halaman, dapat disesuaikan sesuai kebutuhan Anda

        if ($request->filled('per_page')) {
            $perPage = $request->input('per_page');
        }
        // Simpan data pencarian dalam sesi
        $request->flash();

        $results = Following::where('user_id', Auth::user()->id)
            ->whereHas('following', function ($query) use ($request) {
                if ($request->filled('name')) {
                    $query->where('name', 'like', '%' . $request->input('name') . '%');
                }
            })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());

        return view('user.following', [
            'page_name' => "Daftar Ikuti Perusahaan",
            'data' => $results,
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::user()) {

            if ($request->employer_id == Auth::user()->id) {
                return response()->json(['status' => 'error', 'data' => 'Tidak Bisa Memfollow Diri Sendiri.']);
            }


            $data = Following::firstOrCreate([
                'employer_id' => $request->employer_id,
                'user_id' => Auth::user()->id
            ]);


            if ($data) {
                return response()->json(['status' => 'success', 'data' => 'Sukses Menambahkan Following.']);
            } else {
                return response()->json(['status' => 'error', 'data' => 'Gagal Menambahkan Following.']);
            }
        } else {
            return response()->json(['status' => 'error', 'data' => 'Gagal Menambahkan Job ke list, Silahkan Login terlebih dahulu.']);
        }
    }

    public function destroy(string $id)
    {
        $data = Following::findOrFail($id);
        $data->delete();

        if ($data) {
            return redirect()->back()->with('message', 'Berhasil Hapus Data');
        } else {
            return redirect()->back()->with('message', 'Gagal Hapus Data');
        }
    }

    public function delete(Request $data)
    {
        $data = Following::where('employer_id', $data->employer_id)->first();
        $data->delete();

        if ($data) {
            return response()->json(['status' => 'success', 'data' => 'Sukses Menghapus Following.']);
        } else {
            return response()->json(['status' => 'error', 'data' => 'Gagal Menghapus Following.']);
        }
    }
}
