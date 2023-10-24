<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Following;
use App\Models\ProfileViews;
use Illuminate\Http\Request;
use App\Models\CandidateProfile;
use Illuminate\Support\Facades\Auth;

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

        // Hitung untuk tabel pertama
        foreach ($data1->toArray() as $key => $value) {
            if ($value !== null) {
                $jumlahKolomTerisi++;
            }
            $jumlahTotalKolom++;
        }

        // Hitung untuk tabel kedua
        foreach ($data2->toArray() as $key => $value) {
            if ($value !== null) {
                $jumlahKolomTerisi++;
            }
            $jumlahTotalKolom++;
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
        $page_name = 'List User';

        $check_complete = $this->check_completion(Auth::user()->id);

        return view('home', [
            'page_name' => $page_name,
            'check_complete' => $check_complete
        ]);
    }

    public function profile()
    {
        $page_name = "My Profile";
        $data = User::findOrFail(Auth::user()->id);
        $profile = CandidateProfile::with('pengalaman_kerja', 'social_media')->where('user_id', Auth::user()->id)->first();
        return view('user.profile', [
            'page_name' => $page_name,
            'data' => $data,
            'profile' => $profile
        ]);
    }

    public function settings()
    {
        return view('user.profile');
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
        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_candidate = str_replace(' ', '-', Auth::user()->name);;
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
        }

        $action = $candidate->update([
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'name' => $request->name
        ]);

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

        if ($action == true && $action2 == true) {
            return redirect()->back()->with('message', 'Data Berhasil Diubah!');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Diubah! Silakan Ulangi Beberapa Saat Lagi');
        }
    }
}
