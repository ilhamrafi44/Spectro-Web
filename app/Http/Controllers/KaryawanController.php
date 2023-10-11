<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function karyawan_add(Request $data)
    {
        if ($data->file('file_profile_id')) {
            $ldate = date('Y_m_d');
            $ltime = date('H_i_s');
            $logo_perusahaan = $data->file('file_profile_id');
            $nama_file = "Karyawan_Time_" . $ldate . "_" . $ltime . "." . $logo_perusahaan->extension();
            $path = "public/file/images/karyawan";
            $logo_perusahaan->storeAs($path, $nama_file);

            $add = Karyawan::create([
                'user_id' => Auth::user()->id,
                'nama' => $data->nama,
                'jabatan' => $data->jabatan,
                'pengalaman' => $data->pengalaman,
                'file_profile_id' => $data->nama_file,
                'facebook_url' => $data->facebook_url,
                'twitter_url' => $data->twitter_url,
                'googleplus_url' => $data->googleplus_url,
                'linkedin_url' => $data->linkedin_url,
                'dribbble_url' => $data->dribbble_url,
                'deskripsi' => $data->deskripsi,
            ]);

            if ($add) {
                return redirect()->back()->with('message', 'Berhasil Tambah Data');
            }
            return redirect()->back()->with('error', 'Gagal / Error');

        } else {

            $add = Karyawan::create([
                'user_id' => Auth::user()->id,
                'nama' => $data->nama,
                'jabatan' => $data->jabatan,
                'pengalaman' => $data->pengalaman,
                'facebook_url' => $data->facebook_url,
                'twitter_url' => $data->twitter_url,
                'googleplus_url' => $data->googleplus_url,
                'linkedin_url' => $data->linkedin_url,
                'dribbble_url' => $data->dribbble_url,
                'deskripsi' => $data->deskripsi,
            ]);

            if ($add) {
                return redirect()->back()->with('message', 'Berhasil Tambah Data');
            }
            return redirect()->back()->with('error', 'Gagal / Error');
        }
    }

    public function karyawan_update(Request $data)
    {
        $update = Karyawan::findOrFail($data->id);

        if ($data->file('file_profile_id')) {
            $ldate = date('Y_m_d');
            $ltime = date('H_i_s');
            $logo_perusahaan = $data->file('file_profile_id');
            $nama_file = "Karyawan_Time_" . $ldate . "_" . $ltime . "." . $logo_perusahaan->extension();
            $path = "public/file/images/karyawan";
            $logo_perusahaan->storeAs($path, $nama_file);
            $update->update([
                'file_profile_id' => $nama_file
            ]);
        }

        $update->nama = $data->nama;
        $update->jabatan = $data->jabatan;
        $update->pengalaman = $data->pengalaman;
        $update->facebook_url = $data->facebook_url;
        $update->twitter_url = $data->twitter_url;
        $update->googleplus_url = $data->googleplus_url;
        $update->linkedin_url = $data->linkedin_url;
        $update->dribbble_url = $data->dribbble_url;
        $update->deskripsi = $data->deskripsi;
        $hasil = $update->update();

        if ($hasil) {
            return redirect()->back()->with('message', 'Berhasil Update Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }

    public function karyawan_delete(string $id)
    {
        $delete = Karyawan::where('id', '=', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Berhasil Hapus Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }
}
