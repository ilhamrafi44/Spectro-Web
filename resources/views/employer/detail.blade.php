@extends('layouts.polos')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <div class="row">
        <div class="col-md-12 mb-10">
            <div class="card">
                @if ($profile?->file_sampul_id == null)
                    <img src="/assets/media/banner-default.jpg" alt="" class="card-img-top" height="200px">
                @else
                    <img src="/storage/file/images/employer/{{ $profile->file_sampul_id }}" alt="" class="card-img-top"
                        height="200px">
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5"
                                style="margin-top: -100%;">
                                @if ($profile?->file_logo_id == null)
                                    <img src="/assets/media/employer-avatar.jpg" alt="" height="300px">
                                @else
                                    <img src="/storage/file/images/employer/{{ $profile->file_logo_id }}" alt=""
                                        height="300px">
                                @endif
                            </div>
                            <div class="container">
                                <h1 class="w-bold ">{{ $data->name }}
                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </h1>

                                <p>
                                    {{ $profile->deskripsi }}
                                </p>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="container">
                                <div class="row d-flex">
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>
                                        {{ $profile->alamat }}, {{ $profile->negara }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Berdiri Sejak : </b></a>
                                        {{ $profile->tahun_pendirian }}
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
                                        <div class="btn btn-primary w-100"><i class="fa-solid fa-user-plus"></i> Follow
                                        </div>
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

    <div class="row d-flex">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>List Job</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>Social Media</h1>
                    <div class="separator mb-5"></div>
                    <ul>

                        @foreach ($profile->social_media as $sosmed)
                        <li class="mb-5">

                            <a href="{{ $sosmed->link }}">{{ $sosmed->jenis }}</a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
