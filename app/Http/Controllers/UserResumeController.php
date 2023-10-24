<?php

namespace App\Http\Controllers;

use App\Models\UserResume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserResumeController extends Controller
{
    public function index()
    {
        $data = UserResume::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);

        return view('user.resume', [
            'page_name' => 'My Resume',
            'data' => $data
        ]);
    }

    public function reset(Request $request)
    {
        $data = UserResume::where('user_id', Auth::user()->id)->first();


        $column = $request->column;
        $file = $data->$column;
        $file_path = 'storage/file/user/resume/' . $file;
        unlink($file_path);

        $saved = $data->update([
            $request->column => null
        ]);


        if ($saved) {
            return redirect()->back()->with('message', 'File Berhasil Dihapus!');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!');
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cv_file' => 'mimes:xls,xlsx|max:10000', // maksimum 10MB
            'language_certificate_file' => 'mimes:pdf|max:10000', // maksimum 10MB
            'ssw_certificate_file' => 'mimes:pdf|max:10000', // maksimum 10MB
            'other_certificate_file' => 'mimes:pdf|max:10000', // maksimum 10MB
            'driving_license_file' => 'mimes:pdf|max:10000', // maksimum 10MB
            'pasport_file ' => 'mimes:pdf|max:10000', // maksimum 10MB
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'File yang diunggah tidak valid. Pastikan ukuran file tidak lebih dari 10MB dan format file sesuai ketentuan.');
        }

        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_candidate = str_replace(' ', '-', Auth::user()->name);;
        $nama_candidate = $data_candidate[0];

        $data = UserResume::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);

        if ($request->file('cv_file')) {
            $nama_profile = 0;
            $filenya = $request->file('cv_file');
            $nama_profile = "File_CV_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
            $path = "public/file/user/resume";
            $filenya->storeAs($path, $nama_profile);
            $saved = $data->update([
                'cv_file' => $nama_profile
            ]);
        }

        if ($request->file('language_certificate_file')) {
            $nama_profile = 0;
            $filenya = $request->file('language_certificate_file');
            $nama_profile = "File_Language_Certificate_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
            $path = "public/file/user/resume";
            $filenya->storeAs($path, $nama_profile);
            $saved = $data->update([
                'language_certificate_file' => $nama_profile
            ]);
        }

        if ($request->file('ssw_certificate_file')) {
            $nama_profile = 0;
            $filenya = $request->file('ssw_certificate_file');
            $nama_profile = "File_SSW_Certificate_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
            $path = "public/file/user/resume";
            $filenya->storeAs($path, $nama_profile);
            $saved = $data->update([
                'ssw_certificate_file' => $nama_profile
            ]);
        }

        if ($request->file('other_certificate_file')) {
            $nama_profile = 0;
            $filenya = $request->file('other_certificate_file');
            $nama_profile = "File_Other_Certificate_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
            $path = "public/file/user/resume";
            $filenya->storeAs($path, $nama_profile);
            $saved = $data->update([
                'other_certificate_file' => $nama_profile
            ]);
        }

        if ($request->file('driving_license_file')) {
            $nama_profile = 0;
            $filenya = $request->file('driving_license_file');
            $nama_profile = "File_SIM_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
            $path = "public/file/user/resume";
            $filenya->storeAs($path, $nama_profile);
            $saved = $data->update([
                'driving_license_file' => $nama_profile
            ]);
        }

        if ($request->file('pasport_file')) {
            $nama_profile = 0;
            $filenya = $request->file('pasport_file');
            $nama_profile = "File_Passport_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
            $path = "public/file/user/resume";
            $filenya->storeAs($path, $nama_profile);
            $saved = $data->update([
                'pasport_file' => $nama_profile
            ]);
        }

        if ($saved) {
            return redirect()->back()->with('message', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!');
        }
    }
}
