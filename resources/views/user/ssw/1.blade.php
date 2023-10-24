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
                                <td>File CV</td>
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
                                <td>File Sertifikat Bahasa</td>
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
                                    <label for="exampleFormControlInput1" class="required form-label">File CV
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="cv_jepang">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File Sertifikat
                                        Bahasa
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="serti_jepang">
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
