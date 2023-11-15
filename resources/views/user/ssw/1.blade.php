@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="w-bolder mb-5">File </h4>
                    <p>Terakhir Update : {{ $data->updated_at }} </p>
                    <div class="table-responsive">

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
                                        @if ($data->OfferingLetter_deskripsi)
                                            {{ $data->OfferingLetter_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->OfferingLetter)
                                            <a href="{{ route('ssw_download', ['name' => 'OfferingLetter', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'OfferingLetter', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_1">
                                                Upload
                                            </button>

                                            <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Upload File 内定書 (Offering Letter)
                                                                </h3>

                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="ki-duotone ki-cross fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>

                                                            <div class="modal-body">
                                                                <label for="" class="mt-1">Deskripsi File</label>
                                                                <input type="text" name="OfferingLetter_deskripsi"
                                                                    class="form-control form-control-solid">
                                                                <label for="" class="mt-1">Input File</label>
                                                                <input type="file" name="OfferingLetter"
                                                                    class="form-control form-control-solid">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Surat pernyataan</td>
                                    <td>
                                        @if ($data->SuratPernyataan_deskripsi)
                                            {{ $data->SuratPernyataan_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->SuratPernyataan)
                                            <a href="{{ route('ssw_download', ['name' => 'SuratPernyataan', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'SuratPernyataan', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_2">
                                                Upload
                                            </button>

                                            <div class="modal fade" tabindex="-1" id="kt_modal_2">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Upload File Surat Pernyataan
                                                                </h3>

                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="ki-duotone ki-cross fs-1"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i>
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>

                                                            <div class="modal-body">
                                                                <label for="" class="mt-1">Deskripsi File</label>
                                                                <input type="text" name="SuratPernyataan_deskripsi"
                                                                    class="form-control form-control-solid">
                                                                <label for="" class="mt-1">Input File</label>
                                                                <input type="file" name="SuratPernyataan"
                                                                    class="form-control form-control-solid">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>KTP Kandidat</td>
                                    <td>
                                        @if ($data->KTPKandidat_deskripsi)
                                            {{ $data->KTPKandidat_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->KTPKandidat)
                                            <a href="{{ route('ssw_download', ['name' => 'KTPKandidat', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'KTPKandidat', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_3">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_3">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File KTP Kandidat
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="KTPKandidat_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="KTPKandidat"
                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>KTP Wali</td>
                                    <td>
                                        @if ($data->KTPWali_deskripsi)
                                            {{ $data->KTPWali_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->KTPWali)
                                            <a href="{{ route('ssw_download', ['name' => 'KTPWali', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'KTPWali', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_4">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_4">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File KTP Wali
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">

                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="KTPWali_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="KTPWali" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>KK Kandidat</td>
                                    <td>
                                        @if ($data->KKKandidat_deskripsi)
                                            {{ $data->KKKandidat_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->KKKandidat)
                                            <a href="{{ route('ssw_download', ['name' => 'KKKandidat', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'KKKandidat', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_5">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_5">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File KK Kandidat
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="KKKandidat_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="KKKandidat"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto bersama keluarga</td>
                                    <td>
                                        @if ($data->FotoKeluarga_deskripsi)
                                            {{ $data->FotoKeluarga_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->FotoKeluarga)
                                            <a href="{{ route('ssw_download', ['name' => 'FotoKeluarga', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'FotoKeluarga', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_6">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_6">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Foto bersama keluarga
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="FotoKeluarga_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="FotoKeluarga"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="bg-primary text-white fs-3">Persiapan Pengajuan CoE</td>
                                </tr>
                                <tr>
                                    <td>1-1 CV CoE</td>
                                    <td>
                                        @if ($data->CVCoE_deskripsi)
                                            {{ $data->CVCoE_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->CVCoE)
                                            <a href="{{ route('ssw_download', ['name' => 'CVCoE', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'CVCoE', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_7">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_7">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Persiapan Pengajuan CoE
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="CVCoE_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="CVCoE" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    </td>
                                </tr>
                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>1-3 Lembar kondisi kesehatan</td>
                                    <td>
                                        @if ($data->LembarKondisiKesehatan_deskripsi)
                                            {{ $data->LembarKondisiKesehatan_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->LembarKondisiKesehatan)
                                            <a href="{{ route('ssw_download', ['name' => 'LembarKondisiKesehatan', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'LembarKondisiKesehatan', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_8">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_8">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File 1-3 Lembar kondisi kesehatan
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="LembarKondisiKesehatan_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="LembarKondisiKesehatan"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>1-5 Syarat Kerja</td>
                                    <td>
                                        @if ($data->SyaratKerja_deskripsi)
                                            {{ $data->SyaratKerja_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->SyaratKerja)
                                            <a href="{{ route('ssw_download', ['name' => 'SyaratKerja', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'SyaratKerja', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_9">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_9">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File 1-5 Syarat Kerja
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="SyaratKerja_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="SyaratKerja"
                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>1-6 Pembayaran Gaji</td>
                                    <td>
                                        @if ($data->PembayaranGaji_deskripsi)
                                            {{ $data->PembayaranGaji_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->PembayaranGaji)
                                            <a href="{{ route('ssw_download', ['name' => 'PembayaranGaji', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'PembayaranGaji', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_10">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_10">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File 1-6 Pembayaran Gaji
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="PembayaranGaji_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="PembayaranGaji"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>1-7 Konfirmasi sudah mengikuti jizen guidance</td>
                                    <td>
                                        @if ($data->KonfirmasiJizenGuidance_deskripsi)
                                            {{ $data->KonfirmasiJizenGuidance_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->KonfirmasiJizenGuidance)
                                            <a href="{{ route('ssw_download', ['name' => 'KonfirmasiJizenGuidance', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'KonfirmasiJizenGuidance', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_11">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_11">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File 1-7 Konfirmasi sudah mengikuti jizen guidance
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="KonfirmasiJizenGuidance_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="KonfirmasiJizenGuidance"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>
                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>1-16 Formulir Detail Rekrutmen</td>
                                    <td>
                                        @if ($data->FormulirDetailRekrutmen_deskripsi)
                                            {{ $data->FormulirDetailRekrutmen_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->FormulirDetailRekrutmen)
                                            <a href="{{ route('ssw_download', ['name' => 'FormulirDetailRekrutmen', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'FormulirDetailRekrutmen', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_12">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_12">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File 1-16 Formulir Detail Rekrutmen
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="FormulirDetailRekrutmen_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="FormulirDetailRekrutmen"
                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>1-17 Rencana Bantuan untuk Pekerja Asing</td>
                                    <td>
                                        @if ($data->RencanaBantuanPekerjaAsing_deskripsi)
                                            {{ $data->RencanaBantuanPekerjaAsing_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->RencanaBantuanPekerjaAsing)
                                            <a href="{{ route('ssw_download', ['name' => 'RencanaBantuanPekerjaAsing', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'RencanaBantuanPekerjaAsing', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_13">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_13">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File 1-17 Rencana Bantuan untuk Pekerja Asing
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">

                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="RencanaBantuanPekerjaAsing_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="RencanaBantuanPekerjaAsing"
                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>MCU Asli</td>
                                    <td>
                                        @if ($data->MCUAsli_deskripsi)
                                            {{ $data->MCUAsli_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->MCUAsli)
                                            <a href="{{ route('ssw_download', ['name' => 'MCUAsli', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'MCUAsli', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_14">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_14">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File MCU Asli
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="MCUAsli_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="MCUAsli" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>Pas Foto</td>
                                    <td>
                                        @if ($data->PasFoto_deskripsi)
                                            {{ $data->PasFoto_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->PasFoto)
                                            <a href="{{ route('ssw_download', ['name' => 'PasFoto', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'PasFoto', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_15">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_15">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Pas Foto
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">

                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="PasFoto_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="PasFoto" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr><!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td colspan="3" class="bg-primary text-white fs-3">Pengajuan e-ID, Verifikasi Data
                                        e-ID (Offline), Billing Jamsostek</td>
                                </tr>
                                <tr>
                                    <td>Surat keterangan status perkawinan (jika sudah menikah)</td>
                                    <td>
                                        @if ($data->SuratKeteranganStatusPerkawinan_deskripsi)
                                            {{ $data->SuratKeteranganStatusPerkawinan_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->SuratKeteranganStatusPerkawinan)
                                            <a href="{{ route('ssw_download', ['name' => 'SuratKeteranganStatusPerkawinan', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'SuratKeteranganStatusPerkawinan', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_16">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_16">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Surat keterangan status perkawinan (jika sudah menikah)
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">

                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="SuratKeteranganStatusPerkawinan_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="SuratKeteranganStatusPerkawinan"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>Surat keterangan izin wali (Concern Notice Wali)</td>
                                    <td>
                                        @if ($data->SuratKeteranganIzinWali_deskripsi)
                                            {{ $data->SuratKeteranganIzinWali_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->SuratKeteranganIzinWali)
                                            <a href="{{ route('ssw_download', ['name' => 'SuratKeteranganIzinWali', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'SuratKeteranganIzinWali', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_17">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_17">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Surat keterangan izin wali (Concern Notice Wali)
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="SuratKeteranganIzinWali_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="SuratKeteranganIzinWali"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>Surat Keterangan Sehat</td>
                                    <td>
                                        @if ($data->SuratKeteranganSehat_deskripsi)
                                            {{ $data->SuratKeteranganSehat_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->SuratKeteranganSehat)
                                            <a href="{{ route('ssw_download', ['name' => 'SuratKeteranganSehat', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'SuratKeteranganSehat', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_18">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_18">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Surat Keterangan Sehat
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="SuratKeteranganSehat_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="SuratKeteranganSehat"
                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>BPJS/KIS/Kepesertaan Jaminan Kesehatan Nasional</td>
                                    <td>
                                        @if ($data->BPJSKIS_deskripsi)
                                            {{ $data->BPJSKIS_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->BPJSKIS)
                                            <a href="{{ route('ssw_download', ['name' => 'BPJSKIS', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'BPJSKIS', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_19">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_19">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File BPJS/KIS/Kepesertaan Jaminan Kesehatan Nasional
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="BPJSKIS_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="BPJSKIS" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>Paspor</td>
                                    <td>
                                        @if ($data->Paspor_deskripsi)
                                            {{ $data->Paspor_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->Paspor)
                                            <a href="{{ route('ssw_download', ['name' => 'Paspor', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'Paspor', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_20">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_20">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Paspor
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="Paspor_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="Paspor" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>Perjanjian Kerja</td>
                                    <td>
                                        @if ($data->PerjanjianKerja_deskripsi)
                                            {{ $data->PerjanjianKerja_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->PerjanjianKerja)
                                            <a href="{{ route('ssw_download', ['name' => 'PerjanjianKerja', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'PerjanjianKerja', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_21">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_21">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Perjanjian Kerja
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="PerjanjianKerja_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="PerjanjianKerja"
                                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>



                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>CoE</td>
                                    <td>
                                        @if ($data->CoE_deskripsi)
                                            {{ $data->CoE_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->CoE)
                                            <a href="{{ route('ssw_download', ['name' => 'CoE', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'CoE', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_22">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_22">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File CoE
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                                            <input type="text" name="CoE_deskripsi"
                                                                class="form-control form-control-solid">
                                                            <label for="" class="mt-1">Input File</label>
                                                            <input type="file" name="CoE" class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>

                                <!-- Lanjutkan dengan entri lainnya di sini -->
                                <tr>
                                    <td>Surat pernyataan bertanggung jawab terhadap segala risiko ketenagakerjaan</td>
                                    <td>
                                        @if ($data->SuratPernyataanBertanggungJawab_deskripsi)
                                            {{ $data->SuratPernyataanBertanggungJawab_deskripsi }}
                                        @else
                                            .
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->SuratPernyataanBertanggungJawab)
                                            <a href="{{ route('ssw_download', ['name' => 'SuratPernyataanBertanggungJawab', 'id' => $data->id]) }}"
                                                class="btn btn-sm btn-success">Download</a>
                                            <a href="{{ route('ssw_delete', ['name' => 'SuratPernyataanBertanggungJawab', 'id' => $data->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        @else
                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_23">
                                                Upload
                                            </button>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_23">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('ssw.file', ['id' => $data->id]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Upload File Surat pernyataan bertanggung jawab terhadap segala risiko ketenagakerjaan
                                                            </h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <label for="" class="mt-1">Deskripsi File</label>
                                            <input type="text" name="SuratPernyataanBertanggungJawab_deskripsi"
                                                class="form-control form-control-solid">
                                            <label for="" class="mt-1">Input File</label>
                                            <input type="file" name="SuratPernyataanBertanggungJawab"
                                                class="form-control form-control-solid">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <button class="btn btn-spectro" type="submit">Upload</button> --}}
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
                        <input type="hidden" name="id" value="{{ $data->id }}">
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
                                    <td class="text-center"><input type="checkbox" id="PengajuanPaspor"
                                            name="PengajuanPaspor" value="1"
                                            {{ $data->PengajuanPaspor ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pengajuan surat keterangan memiliki SIM dari polres domisili (jika dibutuhkan)</td>
                                    <td class="text-center"><input type="checkbox" id="PengajuanSIM" name="PengajuanSIM"
                                            value="1" {{ $data->PengajuanSIM ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jizen Guidance</td>
                                    <td class="text-center"><input type="checkbox" id="JizenGuidance"
                                            name="JizenGuidance" value="1"
                                            {{ $data->JizenGuidance ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MCU (Setelah diberi keterangan dari TSK untuk melakukan MCU)</td>
                                    <td class="text-center"><input type="checkbox" id="MCU" name="MCU"
                                            value="1" {{ $data->MCU ? 'checked' : '' }}></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mencetak pas foto (background putih; 3,5x4,5; 5 lembar)</td>
                                    <td class="text-center"><input type="checkbox" id="MencetakPasFoto"
                                            name="MencetakPasFoto" value="1"
                                            {{ $data->MencetakPasFoto ? 'checked' : '' }}></td>
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
