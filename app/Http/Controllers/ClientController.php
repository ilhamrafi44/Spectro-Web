<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {

        $query = Client::query();

        if ($request->filled('name')) {
            $query->where('nama', 'like', '%' . $request->input('name') . '%');
        }

        $query->orderBy('created_at', in_array($request->input('direction', 'asc'), ['asc', 'desc']) ? $request->input('direction', 'asc') : 'asc');

        $results = $query->paginate($request->filled('per_page') ? $request->input('per_page') : 10)->appends($request->query());

        return view('admin.landing.client', [
            "page_name" => "Testimonial List",
            "data" => $results
        ]);
    }

    public function store(Request $request)
    {
        $data = new Client();
        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        if ($request->file('picture')) {
            $logo_perusahaan = $request->file('picture');
            $nama_file = "Logo_" . $request->name . "_Time_" . $ldate . "_" . $ltime . "." . $logo_perusahaan->extension();
            $path = "public/file/images/testimonial";
            $logo_perusahaan->storeAs($path, $nama_file);
            $data->picture = $nama_file;
        }
        $data->name = $request->name;
        $saved = $data->save();
        if ($saved) {
            return redirect()->back()->with('message', 'Testimonial Berhasil Ditambah');
        }
        return redirect()->back()->with('error', 'Testimonial Berhasil Ditambah');
    }

    public function destroy(string $id)
    {
        $Category = Client::where('id', $id)->delete();
        if ($Category) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function update(Request $request)
    {
        $Testimonials = Client::findOrFail($request->id);
        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        if ($request->file('picture')) {
            $logo_perusahaan = $request->file('picture');
            $nama_file = "Logo_" . $request->name . "_Time_" . $ldate . "_" . $ltime . "." . $logo_perusahaan->extension();
            $path = "public/file/images/client";
            $logo_perusahaan->storeAs($path, $nama_file);
            $Testimonials->picture = $nama_file;
        }
        $Testimonials->name = $request->name;
        $update = $Testimonials->update();
        if ($update) {
            return redirect()->back()->with('message', 'Testimoni Berhasil Diubah');
        }
        return redirect()->back()->with('error', 'Testimoni Berhasil Diubah');
    }
}
