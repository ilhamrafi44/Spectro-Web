<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper\ImageManager;


class EmployerController extends Controller
{
    use ImageManager;
    public function __construct()
    {
        // $this->middleware('employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('employer.home', [
            "page_name" => "Home"
        ]);
    }

    public function profile()
    {
        $data = Auth::user();
        return view('employer.profile', [
            "page_name" => "My Profile",
            "data" => $data,
        ]);
    }

    public function detail($id)
    {
        $data = User::find($id);
        return view('employer.detail', [
            "page_name" => "Detail Employer",
            "data" => $data,
        ]);
    }

    public function update(Request $request)
    {

        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_employer = explode(" ", Auth::user()->name);
        $nama_employer = $data_employer[0];

        $employer = User::where('id', '=', Auth::user()->id);
        if ($request->file('logo_perusahaan')) {
            $logo_perusahaan = $request->file('logo_perusahaan');
            $nama_file = "Logo_" . $nama_employer . "_Time_" . $ldate . "_" . $ltime . "." . $logo_perusahaan->extension();
            $path = "public/file/images/employer";
            $logo_perusahaan->storeAs($path, $nama_file);
            $employer->update([
                'file_profile_id' => $nama_file
            ]);
        }

        if ($request->file('foto_sampul')) {
            $foto_sampul = $request->file('foto_sampul');
            $nama_file_sampul = "Sampul_" . $nama_employer . "_Time_" . $ldate . "_" . $ltime . "." . $foto_sampul->extension();
            $path_sampul = "public/file/images/employer";
            $foto_sampul->storeAs($path_sampul, $nama_file_sampul);
            $employer->update([
                'file_cv_id' => $nama_file_sampul
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
