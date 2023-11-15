<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('admin.website', [
            'page_name' => 'Konfigurasi Website',
            'data' => Website::firstOrCreate()
        ]);
    }

    public function update(Request $request)
    {
        $tags = json_decode($request->input('tags_website'), true);
        $formattedTags = implode(', ', array_column($tags, 'value'));
        Website::first()->update([
            'nama_website' => $request->input('nama_website'),
            'deskripsi_website' => $request->input('deskripsi_website'),
            'nomor_hp' => $request->input('nomor_hp'),
            'alamat' => $request->input('alamat'),
            'about_us' => $request->input('about_us'),
            'email' => $request->input('email'),
            'tags_website' => $formattedTags,
            'terms' => $request->input('terms'),
        ]);
        return redirect()->back()->with('message', 'Website configuration updated successfully');
    }
}
