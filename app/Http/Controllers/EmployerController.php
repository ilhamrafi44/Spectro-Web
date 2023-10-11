<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper\ImageManager;
use App\Models\EmployerProfile;
use App\Models\SocialMedia;

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
        $profile = EmployerProfile::with('social_media', 'karyawan')->where('user_id', '=', Auth::user()->id)->first();
        return view('employer.profile', [
            "page_name" => "My Profile",
            "data" => $data,
            "profile" => $profile
        ]);
    }

    public function detail($id)
    {
        $data = User::find($id);
        $data2 = EmployerProfile::with('social_media', 'karyawan')->where('user_id', '=', $id)->first();
        return view('employer.detail', [
            "page_name" => "Detail Employer",
            "data" => $data,
            "profile" => $data2
        ]);
    }

    public function update(Request $request)
    {

        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_employer = explode(" ", Auth::user()->name);
        $nama_employer = $data_employer[0];

        $employer = User::where('id', '=', Auth::user()->id);
        $employer_profile = EmployerProfile::where('user_id', '=', Auth::user()->id);
        if ($request->file('logo_perusahaan')) {
            $logo_perusahaan = $request->file('logo_perusahaan');
            $nama_file = "Logo_" . $nama_employer . "_Time_" . $ldate . "_" . $ltime . "." . $logo_perusahaan->extension();
            $path = "public/file/images/employer";
            $logo_perusahaan->storeAs($path, $nama_file);
            $employer_profile->update([
                'file_logo_id' => $nama_file
            ]);
        }

        if ($request->file('foto_profile')) {
            $foto_profile = $request->file('foto_profile');
            $nama_profile = "Profile_" . $nama_employer . "_Time_" . $ldate . "_" . $ltime . "." . $foto_profile->extension();
            $path = "public/file/images/profile";
            $foto_profile->storeAs($path, $nama_profile);
            $employer->update([
                'file_profile_id' => $nama_profile
            ]);
        }

        if ($request->file('foto_sampul')) {
            $foto_sampul = $request->file('foto_sampul');
            $nama_file_sampul = "Sampul_" . $nama_employer . "_Time_" . $ldate . "_" . $ltime . "." . $foto_sampul->extension();
            $path_sampul = "public/file/images/employer";
            $foto_sampul->storeAs($path_sampul, $nama_file_sampul);
            $employer_profile->update([
                'file_sampul_id' => $nama_file_sampul
            ]);
        }

        $employer->update([
            'email' => $request->email,
            'nomor_telepon' => $request->no_tlp,
            'name' => $request->nama

        ]);

        $employer_profile->update([
            'situs_web' => $request->situs_web,
            'tahun_pendirian' => $request->tahun_pendirian,
            'ukuran_perusahaan' => $request->ukuran_perusahaan,
            'kategori_perusahaan' => $request->kategori_perusahaan,
            'url_video' => $request->url_video,
            'deskripsi' => $request->deskripsi,
            'negara' => $request->negara,
            'alamat' => $request->alamat,
        ]);

        if ($employer) {
            return redirect()->route('employer_profile')->with('message', 'Berhasil Update Data');
        }
        return redirect()->route('employer_profile')->with('error', 'User Berhasil Ditambah');
    }

}
