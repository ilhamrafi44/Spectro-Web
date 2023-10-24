@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-6 mb-10">
        <div class="card">
            <div class="card-body">
                <h4 class="w-bolder mb-5">Screening Document</h4>
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
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('ssw.acc', ['id' => $data->id]) }}" class="btn btn-primary col-12">ACC</a>
            </div>
        </div>
    </div>
@endsection
