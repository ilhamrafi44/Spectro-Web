<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\User;
use App\Models\Rating;
use App\Models\Following;
use App\Models\SocialMedia;
use App\Helper\ImageManager;
use App\Models\Applications;
use App\Models\JobsIndustry;
use App\Models\ProfileViews;
use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use App\Models\PrivateNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        $total_comments = number_format(Rating::where('user_id', Auth::user()->id)->get()->count());
        $total_views = number_format(ProfileViews::where('user_id', Auth::user()->id)->get()->count());
        $total_apply = number_format(Applications::where('employer_id', Auth::user()->id)->get()->count());
        $notifications = PrivateNotification::where('to_id', Auth::user()->id)->orderby('created_at', 'desc')->get();

        return view('employer.home', [
            "page_name" => "Home",
            'chart' => $data,
            'total_comments' => $total_comments,
            'total_views' => $total_views,
            'total_apply' => $total_apply,
            'notifications' => $notifications,
            'applys' => Applications::where('employer_id', Auth::user()->id)->limit(5)->get(),
            'data_news' => News::limit(10)->orderBy('created_at', 'desc')->get()

        ]);
    }

    public function profile()
    {
        $data = Auth::user();
        $profile = EmployerProfile::with('social_media', 'karyawan')->where('user_id', '=', Auth::user()->id)->first();
        return view('employer.profile', [
            "page_name" => "My Profile",
            "data" => $data,
            "profile" => $profile,
            'industry' => JobsIndustry::all()
        ]);
    }

    public function detail(Request $request)
    {
        $check = 0;

        if (Auth::user()) {
            $check = Following::where('user_id', Auth::user()->id)->where('employer_id', $request->id)->count();
        }

        $id = $request->id;
        $data = User::find($id);
        $data2 = EmployerProfile::with('social_media', 'karyawan', 'jobs', 'comments', 'followers')->where('user_id', '=', $id)->first();
        if($data2) {
            ProfileViews::create([
                'user_id' => $id,
                'ip' => $request->ip()
            ]);
        }
        return view('employer.detail', [
            "page_name" => "Detail Employer",
            "data" => $data,
            "profile" => $data2,
            "check" => $check
        ]);
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file_profile_id' => 'image|mimes:jpeg,jpg,png|max:10000', // Hanya menerima file gambar jpg atau png maksimum 10MB
        ], [
            'file_profile_id.image' => 'The :attribute must be an image.',
            'file_profile_id.mimes' => 'The :attribute must be a file of type: jpeg, jpg, png.',
            'file_profile_id.max' => 'The :attribute may not be greater than 10MB in size.',
        ]);

        // Jika validasi gagal, redirect kembali dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_employer = str_replace(' ', '-', Auth::user()->name);;
        $nama_employer = $data_employer[0];

        $employer = User::where('id', '=', Auth::user()->id);
        $employer_profile = EmployerProfile::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);
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
