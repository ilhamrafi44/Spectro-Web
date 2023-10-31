@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="w-bolder mb-5">File </h4>
                    <p>Terakhir Update : {{ $data->updated_at }} </p>
                    <div class="table-responsive">
                        <form action="{{ route('ssw.file', ['id' => $data->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama File</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="bg-primary text-white fs-3">Lolos Interview User</td>
                                    </tr>
                                    <tr>
                                        <td>内定書 (Offering Letter)</td>
                                        <td>
                                            @if (!$data->OfferingLetter_deskripsi)
                                                {{ $data->OfferingLetter_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->OfferingLetter)
                                                <a href="{{ route('ssw_download', ['name' => 'OfferingLetter', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'OfferingLetter', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="OfferingLetter_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="OfferingLetter"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Surat pernyataan</td>
                                        <td>
                                            @if (!$data->SuratPernyataan_deskripsi)
                                                {{ $data->SuratPernyataan_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->SuratPernyataan)
                                                <a href="{{ route('ssw_download', ['name' => 'SuratPernyataan', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'SuratPernyataan', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="SuratPernyataan_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="SuratPernyataan"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP Kandidat</td>
                                        <td>
                                            @if (!$data->KTPKandidat_deskripsi)
                                                {{ $data->KTPKandidat_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->KTPKandidat)
                                                <a href="{{ route('ssw_download', ['name' => 'KTPKandidat', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'KTPKandidat', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="KTPKandidat_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="KTPKandidat"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KTP Wali</td>
                                        <td>
                                            @if (!$data->KTPWali_deskripsi)
                                                {{ $data->KTPWali_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->KTPWali)
                                                <a href="{{ route('ssw_download', ['name' => 'KTPWali', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'KTPWali', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="KTPWali_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="KTPWali"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KK Kandidat</td>
                                        <td>
                                            @if (!$data->KKKandidat_deskripsi)
                                                {{ $data->KKKandidat_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->KKKandidat)
                                                <a href="{{ route('ssw_download', ['name' => 'KKKandidat', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'KKKandidat', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="KKKandidat_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="KKKandidat"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Foto bersama keluarga</td>
                                        <td>
                                            @if (!$data->FotoKeluarga_deskripsi)
                                                {{ $data->FotoKeluarga_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->FotoKeluarga)
                                                <a href="{{ route('ssw_download', ['name' => 'FotoKeluarga', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'FotoKeluarga', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="FotoKeluarga_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="FotoKeluarga"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="bg-primary text-white fs-3">Persiapan Pengajuan CoE</td>
                                    </tr>
                                    <tr>
                                        <td>1-1 CV CoE</td>
                                        <td>
                                            @if (!$data->CVCoE_deskripsi)
                                                {{ $data->CVCoE_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->CVCoE)
                                                <a href="{{ route('ssw_download', ['name' => 'CVCoE', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'CVCoE', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="CVCoE_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="CVCoE"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>1-3 Lembar kondisi kesehatan</td>
                                        <td>
                                            @if (!$data->LembarKondisiKesehatan_deskripsi)
                                                {{ $data->LembarKondisiKesehatan_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->LembarKondisiKesehatan)
                                                <a href="{{ route('ssw_download', ['name' => 'LembarKondisiKesehatan', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'LembarKondisiKesehatan', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="LembarKondisiKesehatan_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="LembarKondisiKesehatan"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>1-5 Syarat Kerja</td>
                                        <td>
                                            @if (!$data->SyaratKerja_deskripsi)
                                                {{ $data->SyaratKerja_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->SyaratKerja)
                                                <a href="{{ route('ssw_download', ['name' => 'SyaratKerja', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'SyaratKerja', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="SyaratKerja_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="SyaratKerja"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>1-6 Pembayaran Gaji</td>
                                        <td>
                                            @if (!$data->PembayaranGaji_deskripsi)
                                                {{ $data->PembayaranGaji_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->PembayaranGaji)
                                                <a href="{{ route('ssw_download', ['name' => 'PembayaranGaji', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'PembayaranGaji', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="PembayaranGaji_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="PembayaranGaji"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>1-7 Konfirmasi sudah mengikuti jizen guidance</td>
                                        <td>
                                            @if (!$data->KonfirmasiJizenGuidance_deskripsi)
                                                {{ $data->KonfirmasiJizenGuidance_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->KonfirmasiJizenGuidance)
                                                <a href="{{ route('ssw_download', ['name' => 'KonfirmasiJizenGuidance', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'KonfirmasiJizenGuidance', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="KonfirmasiJizenGuidance_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="KonfirmasiJizenGuidance"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>1-16 Formulir Detail Rekrutmen</td>
                                        <td>
                                            @if (!$data->FormulirDetailRekrutmen_deskripsi)
                                                {{ $data->FormulirDetailRekrutmen_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->FormulirDetailRekrutmen)
                                                <a href="{{ route('ssw_download', ['name' => 'FormulirDetailRekrutmen', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'FormulirDetailRekrutmen', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="FormulirDetailRekrutmen_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="FormulirDetailRekrutmen"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>1-17 Rencana Bantuan untuk Pekerja Asing</td>
                                        <td>
                                            @if (!$data->RencanaBantuan_deskripsi)
                                                {{ $data->RencanaBantuan_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->RencanaBantuan)
                                                <a href="{{ route('ssw_download', ['name' => 'RencanaBantuan', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'RencanaBantuan', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="RencanaBantuan_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="RencanaBantuan"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>MCU Asli</td>
                                        <td>
                                            @if (!$data->MCUAsli_deskripsi)
                                                {{ $data->MCUAsli_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->MCUAsli)
                                                <a href="{{ route('ssw_download', ['name' => 'MCUAsli', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'MCUAsli', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="MCUAsli_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="MCUAsli"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>Pas Foto</td>
                                        <td>
                                            @if (!$data->PasFoto_deskripsi)
                                                {{ $data->PasFoto_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->PasFoto)
                                                <a href="{{ route('ssw_download', ['name' => 'PasFoto', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'PasFoto', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="PasFoto_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="PasFoto"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr><!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td colspan="3" class="bg-primary text-white fs-3">Pengajuan e-ID, Verifikasi Data e-ID (Offline), Billing Jamsostek</td>
                                    </tr>
                                    <tr>
                                        <td>Surat keterangan status perkawinan (jika sudah menikah)</td>
                                        <td>
                                            @if (!$data->SuratStatusPerkawinan_deskripsi)
                                                {{ $data->SuratStatusPerkawinan_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->SuratStatusPerkawinan)
                                                <a href="{{ route('ssw_download', ['name' => 'SuratStatusPerkawinan', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'SuratStatusPerkawinan', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="SuratStatusPerkawinan_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="SuratStatusPerkawinan"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>Surat keterangan izin wali (Concern Notice Wali)</td>
                                        <td>
                                            @if (!$data->SuratIzinWali_deskripsi)
                                                {{ $data->SuratIzinWali_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->SuratIzinWali)
                                                <a href="{{ route('ssw_download', ['name' => 'SuratIzinWali', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'SuratIzinWali', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="SuratIzinWali_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="SuratIzinWali"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>Surat Keterangan Sehat</td>
                                        <td>
                                            @if (!$data->SuratKeteranganSehat_deskripsi)
                                                {{ $data->SuratKeteranganSehat_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->SuratKeteranganSehat)
                                                <a href="{{ route('ssw_download', ['name' => 'SuratKeteranganSehat', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'SuratKeteranganSehat', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="SuratKeteranganSehat_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="SuratKeteranganSehat"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>BPJS/KIS/Kepesertaan Jaminan Kesehatan Nasional</td>
                                        <td>
                                            @if (!$data->BPJS_deskripsi)
                                                {{ $data->BPJS_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->BPJS)
                                                <a href="{{ route('ssw_download', ['name' => 'BPJS', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'BPJS', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="BPJS_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="BPJS"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>Paspor</td>
                                        <td>
                                            @if (!$data->Paspor_deskripsi)
                                                {{ $data->Paspor_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->Paspor)
                                                <a href="{{ route('ssw_download', ['name' => 'Paspor', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'Paspor', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="Paspor_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="Paspor"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>Perjanjian Kerja</td>
                                        <td>
                                            @if (!$data->PerjanjianKerja_deskripsi)
                                                {{ $data->PerjanjianKerja_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->PerjanjianKerja)
                                                <a href="{{ route('ssw_download', ['name' => 'PerjanjianKerja', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'PerjanjianKerja', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="PerjanjianKerja_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="PerjanjianKerja"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>CoE</td>
                                        <td>
                                            @if (!$data->CoE_deskripsi)
                                                {{ $data->CoE_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->CoE)
                                                <a href="{{ route('ssw_download', ['name' => 'CoE', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'CoE', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="CoE_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="CoE"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Lanjutkan dengan entri lainnya di sini -->
                                    <tr>
                                        <td>Surat pernyataan bertanggung jawab terhadap segala risiko ketenagakerjaan</td>
                                        <td>
                                            @if (!$data->SuratPernyataanRisiko_deskripsi)
                                                {{ $data->SuratPernyataanRisiko_deskripsi }}
                                            @else
                                                Belum ada deskripsi
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->SuratPernyataanRisiko)
                                                <a href="{{ route('ssw_download', ['name' => 'SuratPernyataanRisiko', 'id' => $data->id]) }}"
                                                    class="btn btn-sm btn-success">Download</a>
                                                <a href="{{ route('ssw_delete', ['name' => 'SuratPernyataanRisiko', 'id' => $data->id]) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @else
                                                <label for="" class="mt-1">Deskripsi File</label>
                                                <input type="text" name="SuratPernyataanRisiko_deskripsi"
                                                    class="form-control form-control-solid">
                                                <label for="" class="mt-1">Input File</label>
                                                <input type="file" name="SuratPernyataanRisiko"
                                                    class="form-control form-control-solid">
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-spectro" type="submit">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ssw.check') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="table-reponsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Item</th>
                                    <th class="text-center">Checklist</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pengajuan paspor (jika belum memiliki paspor atau harus memperpanjang paspor)</td>
                                    <td class="text-center"><input type="checkbox" id="PengajuanPaspor" name="PengajuanPaspor"
                                            value="1" {{ $data->PengajuanPaspor ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pengajuan surat keterangan memiliki SIM dari polres domisili (jika dibutuhkan)</td>
                                    <td class="text-center"><input type="checkbox" id="PengajuanSIM" name="PengajuanSIM" value="1"
                                            {{ $data->PengajuanSIM ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jizen Guidance</td>
                                    <td class="text-center"><input type="checkbox" id="JizenGuidance" name="JizenGuidance" value="1"
                                            {{ $data->JizenGuidance ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MCU (Setelah diberi keterangan dari TSK untuk melakukan MCU)</td>
                                    <td class="text-center"><input type="checkbox" id="MCU" name="MCU" value="1"
                                            {{ $data->MCU ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mencetak pas foto (background putih; 3,5x4,5; 5 lembar)</td>
                                    <td class="text-center"><input type="checkbox" id="MencetakPasFoto" name="MencetakPasFoto"
                                            value="1" {{ $data->MencetakPasFoto ? 'checked' : '' }}></td>
                                </tr>
                            </table>

                        </div>
                        <button class="btn btn-spectro" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content wrapper-->
    <!--end::App-->
@endsection
