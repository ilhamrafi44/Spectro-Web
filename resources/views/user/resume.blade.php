@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6 mb-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="w-bolder mb-5">My Resume </h4>
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
                                    @if ($data->cv_file == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/resume/{{ $data->cv_file }}"
                                            class="btn btn-light btn-sm">Lihat</a>
                                        <a href="{{ route('user.resume.reset', ['column' => 'cv_file']) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>File Sertifikat Bahasa</td>
                                <td>
                                    @if ($data->language_certificate_file == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/resume/{{ $data->language_certificate_file }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('user.resume.reset', ['column' => 'language_certificate_file']) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Sertifikat SSW</td>
                                <td>
                                    @if ($data->ssw_certificate_file == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/resume/{{ $data->ssw_certificate_file }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('user.resume.reset', ['column' => 'ssw_certificate_file']) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>File Sertifikat Lainnya</td>
                                <td>
                                    @if ($data->other_certificate_file == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/resume/{{ $data->other_certificate_file }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('user.resume.reset', ['column' => 'other_certificate_file']) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>File SIM</td>
                                <td>
                                    @if ($data->driving_license_file == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/resume/{{ $data->driving_license_file }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('user.resume.reset', ['column' => 'driving_license_file']) }}"
                                            class="btn btn-white text-spectro btn-sm">x</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>File Pasport</td>
                                <td>
                                    @if ($data->pasport_file == null)
                                        Kosong
                                    @else
                                        <a href="/storage/file/user/resume/{{ $data->pasport_file }}"
                                            class="btn btn-sm btn-light">Lihat</a>
                                        <a href="{{ route('user.resume.reset', ['column' => 'pasport_file']) }}"
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
                    <form action="{{ route('user.resume.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4 class="w-bolder mb-5">Update Resume </h4>
                        <div class="row d-flex">
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File CV
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="cv_file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File Sertifikat
                                        Bahasa
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="language_certificate_file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File Sertifikat
                                        SSW
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="ssw_certificate_file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File Sertifikat
                                        Lainnya
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="other_certificate_file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File SIM
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="driving_license_file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">File Pasport
                                    </label>
                                    <input type="file" class="form-control form-control-solid" placeholder=""/
                                        name="pasport_file">
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
