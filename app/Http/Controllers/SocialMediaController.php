<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialMediaController extends Controller
{
    public function sosmed_add(Request $data)
    {
        $add = SocialMedia::create([
            'user_id' => Auth::user()->id,
            'jenis' => $data->jenis,
            'link' => $data->link
        ]);

        if ($add) {
            return redirect()->back()->with('message', 'Berhasil Tambah Data');
        }
        return redirect()->back()->with('error', 'Gagal / Error');
    }

    public function sosmed_update(Request $data)
    {
        $update = SocialMedia::findOrFail($data->id);
        $update->jenis = $data->jenis;
        $update->link = $data->link;
        $hasil = $update->update();

        if ($hasil) {
            return redirect()->back()->with('message', 'Berhasil Update Data');
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
