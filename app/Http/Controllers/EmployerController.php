<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            "page_name" => "Home"
        ]);
    }

    public function profile()
    {
        $data = Auth::user();
        return view('employer.profile', [
            "page_name" => "My Profile",
            "data" => $data
        ]);
    }

    public function update(Request $request)
    {
        $fileData = NULL;
        $fileData2 = NULL;
        $path = storage_path('images/');
        $make_path = 'images/';
        !is_dir($path) && mkdir($make_path, 0777, true);
        $employer = User::where('id', Auth::user()->id);
        if ($request->file('logo_perusahaan')) {
            $file = $request->file('logo_perusahaan');
            $fileDataUpload = $this->uploads($file, $make_path);
            $fileData = $fileDataUpload['filePath'];
            $employer->update([
                'file_profile_id' => $fileData
            ]);
        }

        if ($request->file('foto_sampul')) {
            $file2 = $request->file('foto_sampul');
            $fileDataUpload2 = $this->uploads($file, $make_path);
            $fileData2 = $fileDataUpload2['filePath'];
            $employer->update([
                'file_cv_id' => $fileData2
            ]);
        }

        $employer->update([
            'email' => $request->email,
            'nomor_telepon' => $request->no_tlp,
            'agama' => $request->situs_web,
            'usia' => $request->tahun_pendirian,
            'tinggi_badan' => $request->ukuran_perusahaan,
            'berat_badan' => $request->kategori_perusahaan,
            'jurusan' => $request->url_video,
            'deskripsi' => $request->deskripsi,
            'b_inggris' => $request->instagram,
            'b_jepang' => $request->youtube,
            'tempat_belajar' => $request->twitter,
            'sertifikat_lainnya' => $request->negara,
            'kota' => $request->alamat,
            'name' => $request->nama
        ]);
        if ($employer) {
            return redirect()->route('employer_profile')->with('message', 'Berhasil Update Data');
        }
        return redirect()->route('employer_profile')->with('error', 'User Berhasil Ditambah');
    }
}