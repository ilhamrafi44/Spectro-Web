<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengalamanKerja;
use Illuminate\Support\Facades\Auth;

class PengalamanKerjaController extends Controller
{
    public function add(Request $data)
    {
        $add = PengalamanKerja::create([
            'user_id' => Auth::user()->id,
            'tanggal' => $data->tanggal,
            'jabatan' => $data->jabatan,
            'nama_perusahaan' => $data->nama_perusahaan,
            'deskripsi' => $data->deskripsi
        ]);

        if ($add) {
            return redirect()->back()->with('message', 'Berhasil Tambah Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }

    public function update(Request $data)
    {
        $update = PengalamanKerja::findOrFail($data->id);
        $update->tanggal = $data->tanggal;
        $update->jabatan = $data->jabatan;
        $update->nama_perusahaan = $data->nama_perusahaan;
        $update->deskripsi = $data->deskripsi;
        $hasil = $update->update();

        if ($hasil) {
            return redirect()->back()->with('message', 'Berhasil Update Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }

    public function delete(string $id)
    {
        $delete = PengalamanKerja::where('id', '=', $id)->delete();

        if ($delete) {
            return redirect()->back()->with('message', 'Berhasil Hapus Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }
}
