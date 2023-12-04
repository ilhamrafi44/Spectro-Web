<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialMediaController extends Controller
{
    public function sosmed_add(Request $data)
    {

        $validatedData = $data->validate([
            'jenis' => 'required', // Menyatakan bahwa 'jenis' tidak boleh kosong
            'link' => 'required', // Menyatakan bahwa 'link' tidak boleh kosong
        ]);
        try {
            $add = SocialMedia::create([
                'user_id' => Auth::user()->id,
                'jenis' => $validatedData['jenis'],
                'link' => $validatedData['link']
            ]);

            if ($add) {
                return redirect()->back()->with('message', 'Berhasil Tambah Data');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal / Error: Data tidak ada boleh yang kosong.');
        }

        return redirect()->back()->with('error', 'Gagal / Error');
    }


    public function sosmed_update(Request $data)
    {
        $validatedData = $data->validate([
            'jenis' => 'required', // Menyatakan bahwa 'jenis' tidak boleh kosong
            'link' => 'required', // Menyatakan bahwa 'link' tidak boleh kosong
        ]);

        try {
            $update = SocialMedia::findOrFail($data->id);
            $update->jenis = $validatedData['jenis'];
            $update->link = $validatedData['link'];
            $hasil = $update->update();

            if ($hasil) {
                return redirect()->back()->with('message', 'Berhasil Update Data');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal / Error: Data tidak ada boleh yang kosong.');
        }

        return redirect()->back()->with('error', 'Gagal / Error');
    }


    public function sosmed_delete(string $id)
    {
        $delete = SocialMedia::where('id', '=', $id)->delete();

        if ($delete) {
            return redirect()->back()->with('message', 'Berhasil Hapus Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }
}
