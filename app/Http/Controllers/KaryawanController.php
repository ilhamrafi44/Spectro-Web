<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function karyawan_add(Request $data)
    {

        $add = Karyawan::create([
            'user_id' => Auth::user()->id,
            'nama' => $data->nama,
            'jabatan' => $data->jabatan,
            'pengalaman' => $data->pengalaman,
            'email' => $data->email,
        ]);

        if ($add) {
            return redirect()->back()->with('message', 'Berhasil Tambah Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }

    public function karyawan_update(Request $data)
    {
        $update = Karyawan::findOrFail($data->id);

        $update->nama = $data->nama;
        $update->jabatan = $data->jabatan;
        $update->pengalaman = $data->pengalaman;
        $update->email = $data->email;
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
