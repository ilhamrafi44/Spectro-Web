<?php

namespace App\Http\Controllers;

use App\Models\FileSsw;
use Illuminate\Http\Request;
use App\Models\SswFlowMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SswFlowMasterController extends Controller
{
    public function index()
    {
        $ssw = SswFlowMaster::with('jobs')->where('candidate_id', Auth::user()->id)->get();
        return view('user.ssw.index', [
            'page_name' => 'List SSW Flow',
            'data' => $ssw
        ]);
    }

    public function employer_index()
    {
        $ssw = SswFlowMaster::with('jobs')->where('employer_id', Auth::user()->id)->get();
        return view('employer.ssw.index', [
            'page_name' => 'List SSW Flow',
            'data' => $ssw
        ]);
    }


    public function acc(Request $request)
    {
        $data = SswFlowMaster::where('id', $request->id)->first();
        $data->update([
            'level' => $data->level + 1
        ]);
        if ($data) {

            return redirect()->back()->with('message', 'SSW Berhasil di ACC');
        }
        return redirect()->back()->with('error', 'SSW Gagal di ACC');
    }

    public function destroy(Request $request)
    {
        $data = FileSsw::where('ssw_id', $request->id)->where('nama_file', $request->nama_file)->delete();
        if ($data) {

            return redirect()->back()->with('message', 'File Berhasil Dihapus');
        }
        return redirect()->back()->with('error', 'File Gagal Dihapus');
    }

    public function employer_detail(string $id)
    {
        $ssw = SswFlowMaster::findOrFail($id);
        if ($ssw->level == 1) {
            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'cv_jepang')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'serti_jepang')->first();

            return view('employer.ssw.1', [
                'page_name' => 'Screening Dokumen',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2
            ]);
        } else if ($ssw->level == 2) {
            return view('employer.ssw.2', [
                'page_name' => 'Interview TSK',
                'data' => $ssw,
            ]);
        } else if ($ssw->level == 3) {
            return view('employer.ssw.3', [
                'page_name' => 'Interview User',
                'data' => $ssw,
            ]);
        } else if ($ssw->level == 4) {
            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'offering_letter')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_pernyataan')->first();
            $file3 = FileSsw::where('ssw_id', $id)->where('nama_file', 'ktp_kandidat')->first();
            $file4 = FileSsw::where('ssw_id', $id)->where('nama_file', 'ktp_wali')->first();
            $file5 = FileSsw::where('ssw_id', $id)->where('nama_file', 'kk_kandidat')->first();
            $file6 = FileSsw::where('ssw_id', $id)->where('nama_file', 'foto_keluarga')->first();

            return view('employer.ssw.4', [
                'page_name' => 'Lolos interview user',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2,
                'file3' => $file3,
                'file4' => $file4,
                'file5' => $file5,
                'file6' => $file6
            ]);
        } else if ($ssw->level == 5) {
            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'cv_coe')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'kondisi_kesehatan')->first();
            $file3 = FileSsw::where('ssw_id', $id)->where('nama_file', 'syarat_kerja')->first();
            $file4 = FileSsw::where('ssw_id', $id)->where('nama_file', 'pembayaran_gaji')->first();
            $file5 = FileSsw::where('ssw_id', $id)->where('nama_file', 'konfirmasi_mengikuti_jizen')->first();
            $file6 = FileSsw::where('ssw_id', $id)->where('nama_file', 'formulir_detail_rekrutmen')->first();
            $file7 = FileSsw::where('ssw_id', $id)->where('nama_file', 'rencana_bantuan_pekerja_asing')->first();
            $file8 = FileSsw::where('ssw_id', $id)->where('nama_file', 'mcu_asli')->first();
            $file9 = FileSsw::where('ssw_id', $id)->where('nama_file', 'pas_foto')->first();

            return view('employer.ssw.5', [
                'page_name' => 'Persiapan Pengajuan CoE',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2,
                'file3' => $file3,
                'file4' => $file4,
                'file5' => $file5,
                'file6' => $file6,
                'file7' => $file7,
                'file8' => $file8,
                'file9' => $file9
            ]);
        } else if ($ssw->level == 6) {

            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_kawin')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_izin_wali')->first();
            $file3 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_sehat')->first();
            $file4 = FileSsw::where('ssw_id', $id)->where('nama_file', 'bpjs_internasional')->first();
            $file5 = FileSsw::where('ssw_id', $id)->where('nama_file', 'paspor')->first();
            $file6 = FileSsw::where('ssw_id', $id)->where('nama_file', 'perjanjian_kerja')->first();
            $file7 = FileSsw::where('ssw_id', $id)->where('nama_file', 'coe')->first();
            $file8 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_pernyataan_bertanggung_jawab')->first();


            return view('employer.ssw.6', [
                'page_name' => 'Pengajuan e-ID/Jamsostek',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2,
                'file3' => $file3,
                'file4' => $file4,
                'file5' => $file5,
                'file6' => $file6,
                'file7' => $file7,
                'file8' => $file8,
            ]);
        } else if ($ssw->level == 7) {
            return view('employer.ssw.7', [
                'page_name' => 'Pengajuan VISA',
                'data' => $ssw,
            ]);
        }
    }

    public function detail(string $id)
    {
        $ssw = SswFlowMaster::findOrFail($id);
        if ($ssw->level == 1) {
            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'cv_jepang')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'serti_jepang')->first();

            return view('user.ssw.1', [
                'page_name' => 'Screening Dokumen',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2
            ]);
        } else if ($ssw->level == 2) {
            return view('user.ssw.2', [
                'page_name' => 'Interview TSK',
                'data' => $ssw,
            ]);
        } else if ($ssw->level == 3) {
            return view('user.ssw.3', [
                'page_name' => 'Interview User',
                'data' => $ssw,
            ]);
        } else if ($ssw->level == 4) {
            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'offering_letter')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_pernyataan')->first();
            $file3 = FileSsw::where('ssw_id', $id)->where('nama_file', 'ktp_kandidat')->first();
            $file4 = FileSsw::where('ssw_id', $id)->where('nama_file', 'ktp_wali')->first();
            $file5 = FileSsw::where('ssw_id', $id)->where('nama_file', 'kk_kandidat')->first();
            $file6 = FileSsw::where('ssw_id', $id)->where('nama_file', 'foto_keluarga')->first();

            return view('user.ssw.4', [
                'page_name' => 'Lolos interview user',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2,
                'file3' => $file3,
                'file4' => $file4,
                'file5' => $file5,
                'file6' => $file6
            ]);
        } else if ($ssw->level == 5) {
            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'cv_coe')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'kondisi_kesehatan')->first();
            $file3 = FileSsw::where('ssw_id', $id)->where('nama_file', 'syarat_kerja')->first();
            $file4 = FileSsw::where('ssw_id', $id)->where('nama_file', 'pembayaran_gaji')->first();
            $file5 = FileSsw::where('ssw_id', $id)->where('nama_file', 'konfirmasi_mengikuti_jizen')->first();
            $file6 = FileSsw::where('ssw_id', $id)->where('nama_file', 'formulir_detail_rekrutmen')->first();
            $file7 = FileSsw::where('ssw_id', $id)->where('nama_file', 'rencana_bantuan_pekerja_asing')->first();
            $file8 = FileSsw::where('ssw_id', $id)->where('nama_file', 'mcu_asli')->first();
            $file9 = FileSsw::where('ssw_id', $id)->where('nama_file', 'pas_foto')->first();

            return view('user.ssw.5', [
                'page_name' => 'Persiapan Pengajuan CoE',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2,
                'file3' => $file3,
                'file4' => $file4,
                'file5' => $file5,
                'file6' => $file6,
                'file7' => $file7,
                'file8' => $file8,
                'file9' => $file9
            ]);
        } else if ($ssw->level == 6) {

            $file1 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_kawin')->first();
            $file2 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_izin_wali')->first();
            $file3 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_sehat')->first();
            $file4 = FileSsw::where('ssw_id', $id)->where('nama_file', 'bpjs_internasional')->first();
            $file5 = FileSsw::where('ssw_id', $id)->where('nama_file', 'paspor')->first();
            $file6 = FileSsw::where('ssw_id', $id)->where('nama_file', 'perjanjian_kerja')->first();
            $file7 = FileSsw::where('ssw_id', $id)->where('nama_file', 'coe')->first();
            $file8 = FileSsw::where('ssw_id', $id)->where('nama_file', 'surat_pernyataan_bertanggung_jawab')->first();


            return view('user.ssw.6', [
                'page_name' => 'Pengajuan e-ID/Jamsostek',
                'data' => $ssw,
                'file1' => $file1,
                'file2' => $file2,
                'file3' => $file3,
                'file4' => $file4,
                'file5' => $file5,
                'file6' => $file6,
                'file7' => $file7,
                'file8' => $file8,
            ]);
        } else if ($ssw->level == 7) {
            return view('user.ssw.7', [
                'page_name' => 'Pengajuan VISA',
                'data' => $ssw,
            ]);
        }
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        foreach ($inputs as $inputName => $file) {
            if ($request->hasFile($inputName)) {
                $validator = Validator::make($request->all(), [
                    'cv_jepang' => 'mimes:xls,xlsx|max:10000',
                    'serti_jepang' => 'mimes:pdf|max:1000',
                    'offering_letter' => 'mimes:pdf|max:1000',
                    'surat_pernyataan' => 'mimes:pdf|max:1000',
                    'ktp_kandidat' => 'mimes:pdf|max:1000',
                    'ktp_wali' => 'mimes:pdf|max:1000',
                    'kk_kandidat' => 'mimes:pdf|max:1000',
                    'foto_keluarga' => 'mimes:pdf|max:1000',
                    'cv_coe' => 'mimes:pdf|max:1000',
                    'kondisi_kesehatan' => 'mimes:pdf|max:1000',
                    'syarat_kerja' => 'mimes:pdf|max:1000',
                    'pembayaran_gaji' => 'mimes:pdf|max:1000',
                    'konfirmasi_mengikuti_jizen' => 'mimes:pdf|max:1000',
                    'formulir_detail_rekrutmen' => 'mimes:pdf|max:1000',
                    'rencana_bantuan_pekerja_asing' => 'mimes:pdf|max:1000',
                    'mcu_asli' => 'mimes:pdf|max:1000',
                    'pas_foto' => 'mimes:png,jpg,jpeg|max:1000',
                    'surat_kawin' => 'mimes:pdf|max:1000',
                    'surat_izin_wali' => 'mimes:pdf|max:1000',
                    'surat_sehat' => 'mimes:pdf|max:1000',
                    'bpjs_internasional' => 'mimes:pdf|max:1000',
                    'paspor' => 'mimes:pdf|max:1000',
                    'perjanjian_kerja' => 'mimes:pdf|max:1000',
                    'coe' => 'mimes:pdf|max:1000',
                    'surat_pernyataan_bertanggung_jawab' => 'mimes:pdf|max:1000',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->with('error', 'File yang diunggah tidak valid. Pastikan ukuran file tidak lebih dari 10MB dan format file sesuai ketentuan.');
                }

                $ldate = date('Y_m_d');
                $ltime = date('H_i_s');

                $data_candidate = str_replace(' ', '-', Auth::user()->name);;
                $nama_candidate = $data_candidate[0];

                $filenya = $request->file("$inputName");
                $nama_file = "File_" . $inputName . "_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
                $path = "public/file/user/ssw";
                $filenya->storeAs($path, $nama_file);

                $existingFile = FileSsw::where('ssw_id', $request->ssw_id)
                    ->where('nama_file', $inputName)
                    ->where('level', $request->level)
                    ->first();
                if ($existingFile) {
                    $existingFile->update([
                        'file_id' => $nama_file,
                    ]);
                } else {
                    FileSsw::create([
                        'ssw_id' => $request->ssw_id,
                        'job_id' => $request->job_id,
                        'employer_id' => $request->employer_id,
                        'candidate_id' => $request->candidate_id,
                        'nama_file' => "$inputName",
                        'level' => $request->level,
                        'file_id' => $nama_file
                    ]);
                }
            }
        }

        return redirect()->back()->with('message', 'Files have been processed successfully.');
    }
}
