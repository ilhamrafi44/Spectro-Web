<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function index()
    {
        $data = ContactUs::all();

        return view('admin.contact',[
            'page_name' => 'List Contact Us',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $saved = ContactUs::create($request->all());
        if($saved)
        {
            return redirect()->back()->with('message', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!');

        }
    }
}
