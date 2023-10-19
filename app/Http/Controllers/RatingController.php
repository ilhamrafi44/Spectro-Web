<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $save = Rating::create([
            'user_id' => $request->user_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'from_id' => Auth::user()->id,
        ]);

        if($save){
            return redirect()->back()->with('message', 'Komentar Berhasil Di Tambahkan');
        } else {
            return redirect()->back()->with('message', 'Komentar Gagal Di Tambahkan');
        }
    }

    public function destroy(int $id)
    {
        $Rating = Rating::where('id', $id)->delete();
        if ($Rating) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
}
