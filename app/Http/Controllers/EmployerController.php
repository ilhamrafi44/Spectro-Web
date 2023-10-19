<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\SocialMedia;
use App\Helper\ImageManager;
use App\Models\ProfileViews;
use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use Illuminate\Support\Facades\Auth;

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
        $date_list = array();
        for ($i = 6; $i > -1; $i--) {
            $date_list[] = date('Y-m-d', strtotime('-' . $i . ' days'));
        }
        $collect_profile_views = collect(ProfileViews::where('user_id', Auth::user()->id)->whereBetween('created_at', [Carbon::parse($date_list[0]), $date_list[6] . ' 23:59:59'])->get());
        for ($i = 0; $i < count($date_list); $i++) {

            $data_hasil = $collect_profile_views->whereBetween('created_at', [$date_list[$i] . ' 00:00:00', $date_list[$i] . ' 23:59:59'])->count();
            $data[] = ['date' => $date_list[$i], 'total_data' => $data_hasil];
        }

        return view('employer.home', [
            "page_name" => "Home",
            'chart' => $data
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
        $data2 = EmployerProfile::with('social_media', 'karyawan', 'jobs', 'comments')->where('user_id', '=', $id)->first();
        if($data2) {
            ProfileViews::create([
                'user_id' => $id
            ]);
        }
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
