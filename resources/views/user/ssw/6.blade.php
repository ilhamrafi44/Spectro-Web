@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6 mb-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="w-bolder mb-5">Screening Document </h4>
                    <p>Terakhir Update : {{ $data->updated_at }} </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-light">
                                <td>Nama File</td>
                                <td>File</td>
                                </tr>
                            <tr>
                                <td>Surat keterangan status perkawinan (jika sudah menikah)</td>
                                <td>
                                    @if ($file1?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file1->file_id }}"
                                            class="btn btn-light btn-sm">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file1->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Surat keterangan izin wali (Concern Notice Wali)</td>
                                <td>
                                    @if ($file2?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file2->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file2->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Surat Keterangan Sehat</td>
                                <td>
                                    @if ($file3?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file3->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file3->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>BPJS/KIS/Kepesertaan Jaminan Kesehatan Nasional</td>
                                <td>
                                    @if ($file4?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file4->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file4->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Paspor</td>
                                <td>
                                    @if ($file5?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file5->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file5->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Perjanjian Kerja</td>
                                <td>
                                    @if ($file6?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file6->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file6->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>CoE</td>
                                <td>
                                    @if ($file7?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file7->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file7->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Surat pernyataan bertanggung jawab terhadap segala risiko ketenagakerjaan</td>
                                <td>
                                    @if ($file8?->file_id == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/ssw/{{ $file8->file_id }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('ssw.delete', ['id' => $data->id, 'nama_file' => $file8->nama_file]) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ssw.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="ssw_id" value="{{ $data->id }}" />
                        <input type="hidden" name="job_id" value="{{ $data->job_id }}" />
                        <input type="hidden" name="employer_id" value="{{ $data->employer_id }}" />
                        <input type="hidden" name="candidate_id" value="{{ $data->candidate_id }}" />
                        <input type="hidden" name="level" value="{{ $data->level }}" />
                        <h4>Tambah Data</h4>
                        <div class="row d-flex">
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Surat keterangan status perkawinan (jika sudah menikah)
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="surat_kawin">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Surat keterangan izin wali (Concern Notice Wali)

                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="surat_izin_wali">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Surat Keterangan Sehat

                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="surat_sehat">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">BPJS/KIS/Kepesertaan Jaminan Kesehatan Nasional

                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="bpjs_internasional">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Paspor
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="paspor">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Perjanjian Kerja

                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="perjanjian_kerja">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">CoE
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="coe">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Surat pernyataan bertanggung jawab terhadap segala risiko ketenagakerjaan
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="surat_pernyataan_bertanggung_jawab">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-spectro">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content wrapper-->
    <!--end::App-->
@endsection
