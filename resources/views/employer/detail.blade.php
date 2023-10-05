@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <img src="/storage/file/images/employer/{{ $data->file_cv_id }}" alt="" class="card-img-top"
                    height="200px">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5"
                                style="margin-top: -100%;">
                                <img src="/storage/file/images/employer/{{ $data->file_profile_id }}" alt=""
                                    height="300px">
                            </div>
                            <div class="container">
                                <h1 class="w-bold ">{{ $data->name }}
                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </h1>

                                <p>
                                    {{ $data->deskripsi }}
                                </p>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="container">
                                <div class="row d-flex">
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>
                                        {{ $data->sertifikat_lainnya }}, {{ $data->kota }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Berdiri Sejak : </b></a>
                                        {{ $data->usia }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-envelope"></i> <b>Email : </b></a>
                                        {{ $data->email }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-phone"></i> <b>No Telepon : </b></a>
                                        {{ $data->nomor_telepon }}
                                    </div>
                                    <div class="col-6 h-100">
                                        <div class="btn btn-primary w-100"><i class="fa-solid fa-user-plus"></i> Follow </div>
                                    </div>
                                    <div class="col-6 h-100">
                                        <div class="btn btn-warning w-100"><i class="fa-solid fa-comments"></i>Chat </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
