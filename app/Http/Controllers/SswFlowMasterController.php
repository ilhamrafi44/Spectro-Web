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

    public function admin(Request $request)
    {
        $order = 'desc';
        if ($request->filled('direction')) {
            $order = $request->input('direction');
        }
        $perPage = 10; // Jumlah item per halaman, dapat disesuaikan sesuai kebutuhan Anda
        if ($request->filled('per_page')) {
            $perPage = $request->input('per_page');
        }
        // Simpan data pencarian dalam sesi
        $request->flash();

        $results = SswFlowMaster::where(function ($query) use ($request) {
            if ($request->filled('name')) {
                $query->whereHas('candidate', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->input('name') . '%');
                })->orWhereHas('employer', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->input('name') . '%');
                });
            }
        })
            ->orderBy('created_at', $request->input('orderby', $order))
            ->paginate($perPage)
            ->appends($request->all());
        $ssw = SswFlowMaster::with('jobs')->get();
        return view('admin.ssw.index', [
            'page_name' => 'List SSW Flow',
            'data' => $results
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

    public function destroy(Request $request)
    {
        $data = SswFlowMaster::where('id', $request->id)->update([
            "$request->name" => null
        ]);
        if ($data) {

            return redirect()->back()->with('message', 'File & Deskripsi Berhasil Dihapus');
        }
        return redirect()->back()->with('error', 'File & Deskripsi Gagal Dihapus');
    }

    public function download(Request $request)
    {
        $data = SswFlowMaster::where('id', $request->id)->first();
        $nama = $data->{$request->name};
        if ($data) {

            return redirect('/storage/file/user/ssw/' . $nama);
        }
        return redirect()->back()->with('error', 'File & Deskripsi Gagal Dihapus');
    }

    public function detail(string $id)
    {
        $ssw = SswFlowMaster::findOrFail($id);
        return view('user.ssw.1', [
            'page_name' => 'SSW FLOW',
            'data' => $ssw,
        ]);
    }

    public function checkSsw(Request $request)
    {
        $data = SswFlowMaster::findOrFail($request->id);

        $data->update([
            'PengajuanPaspor' => $request->has('PengajuanPaspor'),
            'PengajuanSIM' => $request->has('PengajuanSIM'),
            'JizenGuidance' => $request->has('JizenGuidance'),
            'MCU' => $request->has('MCU'),
            'MencetakPasFoto' => $request->has('MencetakPasFoto'),
        ]);
        return redirect()->back()->with('message', 'Status berhasil diperbarui');
    }

    public function fileSsw(Request $request)
    {
        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');

        $data_candidate = str_replace(' ', '-', Auth::user()->name);
        $nama_candidate = $data_candidate[0];

        $fields = [
            'OfferingLetter',
            'SuratPernyataan',
            'KTPKandidat',
            'KTPWali',
            'KKKandidat',
            'FotoKeluarga',
            'CVCoE',
            'LembarKondisiKesehatan',
            'SyaratKerja',
            'PembayaranGaji',
            'KonfirmasiJizenGuidance',
            'FormulirDetailRekrutmen',
            'RencanaBantuanPekerjaAsing',
            'MCUAsli',
            'PasFoto',
            'SuratKeteranganStatusPerkawinan',
            'SuratKeteranganIzinWali',
            'SuratKeteranganSehat',
            'BPJSKIS',
            'Paspor',
            'PerjanjianKerja',
            'CoE',
            'SuratPernyataanBertanggungJawab'
        ];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $request->validate([
                    $field => 'required|mimes:pdf|max:10240', // 10MB in kilobytes
                ]);

                $filenya = $request->file($field);
                $nama_file_store = "File_" . $field . "_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $filenya->extension();
                $path = "public/file/user/ssw";
                $filenya->storeAs($path, $nama_file_store);

                $deskripsi = !empty($request->{$field . '_deskripsi'}) ? $request->{$field . '_deskripsi'} : 'Tidak Ada Deskripsi';

                $update = SswFlowMaster::findOrFail($request->id)->update([
                    $field => $nama_file_store,
                    $field . '_deskripsi' => $deskripsi
                ]);
            }
        }

        return redirect()->back()->with('message', 'Files have been processed successfully.');
    }
}
