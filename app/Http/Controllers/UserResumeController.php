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
        try {
            $saved = false;

            $data = UserResume::where('user_id', Auth::user()->id)->first();

            if (!$data) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }

            $column = $request->column;
            $file = $data->$column;
            $saved = $data->update([
                $column => null
            ]);

            if (!$file) {
                return redirect()->back()->with('error', 'File tidak ditemukan');
            }

            $file_path = 'storage/file/user/resume/' . $file;

            if (file_exists($file_path)) {
                unlink($file_path);
            }

            if ($saved) {
                return redirect()->back()->with('message', 'File berhasil dihapus!');
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus file!');
            }

        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cv_file' => 'file|mimes:pdf,xls,xlsx,doc,docx,png,jpg,jpeg,gif,zip|max:10000',
            'language_certificate_file' => 'file|mimes:pdf,xls,xlsx,doc,docx,png,jpg,jpeg,gif,zip|max:10000',
            'ssw_certificate_file' => 'file|mimes:pdf,xls,xlsx,doc,docx,png,jpg,jpeg,gif,zip|max:10000',
            'other_certificate_file' => 'file|mimes:pdf,xls,xlsx,doc,docx,png,jpg,jpeg,gif,zip|max:10000',
            'driving_license_file' => 'file|mimes:pdf,xls,xlsx,doc,docx,png,jpg,jpeg,gif,zip|max:10000',
            'passport_file' => 'file|mimes:pdf,xls,xlsx,doc,docx,png,jpg,jpeg,gif,zip|max:10000',
        ]);

        $saved = false;

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

        if (@$saved) {
            return redirect()->back()->with('message', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan!');
        }
    }
}
