<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\User;
use App\Models\Rating;
use App\Models\Following;
use App\Models\SavedJobs;
use Illuminate\Support\Str;
use App\Exports\UsersExport;
use App\Models\Applications;
use App\Models\JobsIndustry;
use App\Models\ProfileViews;
use Illuminate\Http\Request;
use App\Models\JobsExperience;
use App\Exports\EmployerExport;
use App\Exports\CandidateExport;
use App\Models\CandidateProfile;
use App\Models\Jobs;
use App\Models\PrivateNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    private function check_completion($id)
    {
        // Ambil data dari tiga tabel berdasarkan relasi
        $data0 = User::find($id); // Ganti NamaModel1 dengan nama model pertama Anda dan $id dengan ID yang sesuai
        $data1 = $data0->candidate_profile; // Ganti namaRelasi1 dengan nama relasi antara Model1 dan Model2
        $data2 = $data0->candidate_resume; // Ganti namaRelasi2 dengan nama relasi antara Model2 dan Model3

        // Hitung jumlah kolom yang terisi dari ketiga tabel
        $jumlahKolomTerisi = 0;
        $jumlahTotalKolom = 0;

        if ($data1) {
            // Hitung untuk tabel pertama
            foreach ($data1?->toArray() as $key => $value) {
                if ($value !== null) {
                    $jumlahKolomTerisi++;
                }
                $jumlahTotalKolom++;
            }
        }



        if ($data2 == !null) {
            // Hitung untuk tabel kedua
            foreach ($data2?->toArray() as $key => $value) {
                if ($value !== null) {
                    $jumlahKolomTerisi++;
                }
                $jumlahTotalKolom++;
            }
        }


        // Hitung persentase data yang terisi
        if ($jumlahTotalKolom > 0) {
            $persentaseDataTerisi = ($jumlahKolomTerisi / $jumlahTotalKolom) * 100;
            return round($persentaseDataTerisi);
        } else {
            return "Tidak ada kolom yang ditemukan.";
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_name = 'Home';

        $check_complete = $this->check_completion(Auth::user()->id);

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
        $total_saved = number_format(SavedJobs::where('user_id', Auth::user()->id)->get()->count());
        $total_apply = number_format(Applications::where('candidate_id', Auth::user()->id)->get()->count());
        $notifications = PrivateNotification::where('to_id', Auth::user()->id)->orderby('created_at', 'desc')->get();

        return view('home', [
            'page_name' => $page_name,
            'check_complete' => $check_complete,
            'chart' => $data,
            'total_comments' => $total_comments,
            'total_views' => $total_views,
            'total_saved' => $total_saved,
            'total_apply' => $total_apply,
            'notifications' => $notifications,
            'data_news' => News::limit(10)->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function candidate(Request $request)
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

        $results = User::where('role', 1)
            ->where(function ($query) use ($request) {
                if ($request->filled('name')) {
                    $query->where('name', 'like', '%' . $request->input('name') . '%');
                }
            })
            ->whereHas('candidate_profile', function ($query) use ($request) {
                if ($request->filled('usia')) {
                    $query->where('usia', '>', $request->input('usia'));
                }

                if ($request->filled('tinggi_badan')) {
                    $query->where('tinggi_badan', '>', $request->input('tinggi_badan'));
                }

                if ($request->filled('pendidikan_terakhir')) {
                    $query->where('pendidikan_terakhir', $request->input('pendidikan_terakhir'));
                }
            })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());

        return view('candidate.index', [
            'page_name' => 'List Candidate',
            'data' => $results,
            'experience' => JobsExperience::all()
        ]);
    }

    public function employer(Request $request)
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

        $results = User::where('role', 2)
            ->where(function ($query) use ($request) {
                if ($request->filled('name')) {
                    $query->where('name', 'like', '%' . $request->input('name') . '%');
                }
            })
            ->whereHas('employer_profile', function ($query) use ($request) {
                if ($request->filled('industry')) {
                    $query->where('kategori_perusahaan', $request->input('industry'));
                }
            })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());

        return view('employer.index', [
            'page_name' => 'List Employer',
            'data' => $results,
            'industry' => JobsIndustry::all()
        ]);
    }

    public function reset_index()
    {
        return view('auth.reset_password', [
            'page_name' => 'Reset Kata Sandi'
        ]);
    }

    public function reset_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'confirmed'
            ],
        ], [
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal :min karakter.',
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);

        if ($validator->fails()) {
            return response()->back()->with('error', $validator->errors()->first());
        }

        $user = User::findOrFail(Auth::user()->id);

        if ($user->password == null && !empty($user->google_id)) {
            $user->password = Hash::make($request->password);
            $user->update();
        } else {
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->with('error', 'Password Saat ini Salah');
            } else {
                $validator = Validator::make($request->all(), [
                    'current_password' => [
                        'required',
                    ],
                ], [
                    'current_password.required' => 'Password saat ini wajib diisi.',
                ]);

                if ($validator->fails()) {
                    return response()->back()->with('error', $validator->errors()->first());
                }

                $user->password = Hash::make($request->password);
                $user->update();
            }
        }
        return redirect()->back()->with('message', 'Berhasil memperbarui Password');
    }

    public function profile()
    {
        $page_name = "My Profile";
        $data = User::findOrFail(Auth::user()->id);
        $experience = JobsExperience::all();
        $profile = CandidateProfile::with('pengalaman_kerja', 'social_media')->where('user_id', Auth::user()->id)->first();
        return view('user.profile', [
            'page_name' => $page_name,
            'data' => $data,
            'profile' => $profile,
            'experience' => $experience
        ]);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'spectro_users.xlsx');
    }
    public function candidate_export()
    {
        // $candidates = CandidateProfile::with('datas')->get();
        
        $candidates = User::join('candidate_profiles', 'users.id', '=', 'candidate_profiles.user_id')
    ->select('users.*', 'candidate_profiles.*')->where('users.role', 1) // Pilih kolom yang ingin ditampilkan dari kedua tabel
    ->get();
            return Excel::download(new CandidateExport($candidates), 'spectro_candidate.xlsx');
    }
    public function employer_export()
    {
        $employer = User::join('employer_profiles', 'users.id', '=', 'employer_profiles.user_id')
    ->select('users.*', 'employer_profiles.*')->where('users.role', 2) // Pilih kolom yang ingin ditampilkan dari kedua tabel
    ->get();
    
        
        return Excel::download(new EmployerExport($employer), 'spectro_employer.xlsx');
    }

    public function hapus_akun(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id)->first();
        $jobs = Jobs::where('user_id', Auth::user()->id)->first();
        if ($request->yakin == 'ya') {
            if ($jobs) {
                return redirect()->back()->with('message', 'Data Gagal Dihapus,Ada job yang terhubung');
            }
            $user->delete();
            return view('auth.delete_account', [
                'page_name' => 'Hapus Akun'
            ]);
        }
        return redirect()->back()->with('message', 'Data Gagal Dihapus');
    }

    public function detail(Request $request)
    {
        $check = 0;

        if (Auth::user()) {
            $check = Following::where('user_id', Auth::user()->id)->where('employer_id', $request->id)->count();
        }

        $id = $request->id;
        $data = User::find($id);
        $data2 = CandidateProfile::with('comments', 'pengalaman_kerja', 'social_media')->where('user_id', '=', $id)->first();
        if ($data2) {
            ProfileViews::create([
                'user_id' => $id,
                'ip' => $request->ip()
            ]);
        }
        return view('user.detail', [
            "page_name" => "Detail Candidate",
            "data" => $data,
            "profile" => $data2,
            'check' => $check
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

        $action = false;

        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_candidate = str_replace(' ', '-', Auth::user()->name);
        $nama_candidate = $data_candidate[0];

        $candidate = User::where('id', '=', Auth::user()->id);
        $candidate_profile = CandidateProfile::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);

        if ($request->file('file_profile_id')) {
            $foto_profile = $request->file('file_profile_id');
            $nama_profile = "Profile_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $foto_profile->extension();
            $path = "public/file/images/profile";
            $foto_profile->storeAs($path, $nama_profile);
            $candidate->update([
                'file_profile_id' => $nama_profile
            ]);
            $action = true;
        }

        if (Str::startsWith($request->nomor_telepon, '0')) {
            $nomorTelepon = '62' . substr($request->nomor_telepon, 1);
            $action = $candidate->update([
                'email' => $request->email,
                'nomor_telepon' => $nomorTelepon,
                'name' => $request->name
            ]);
        } else {
            $action = $candidate->update([
                'email' => $request->email,
                'nomor_telepon' => $request->nomor_telepon,
                'name' => $request->name
            ]);
        }

        $action2 = $candidate_profile->update([
            'jenis_kelamin' => $request->jenis_kelamin,
            'kota' => $request->kota,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'usia' => $request->usia,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'jurusan' => $request->jurusan,
            'b_inggris' => $request->b_inggris,
            'b_jepang' => $request->b_jepang,
            'tempat_belajar' => $request->tempat_belajar,
            'sertifikat_lainnya' => $request->sertifikat_lainnya,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'skor_bahasa' => $request->skor_bahasa,
            'sertifikat_ssw' => $request->sertifikat_ssw,
            'sim_mobil' => $request->sim_mobil,
            'deskripsi' => $request->deskripsi,
            'total_bulan' => $request->total_bulan,
            'total_tahun' => $request->total_tahun
        ]);

        if ($action == true || $action2 == true) {
            return redirect()->back()->with('message', 'Data Berhasil Diubah!');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Diubah! Silakan Ulangi Beberapa Saat Lagi');
        }
    }
}
