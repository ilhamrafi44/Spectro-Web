@extends('layouts.landing')

@section('content')
    <div class="row d-flex rounded-4 bg-secondary align-items-center mb-10">
        <div class="col-md-8 p-5">
            <div class="row d-flex">
                <div class="col-md-3">
                    <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5">
                        <img src="/assets/media/employer-avatar.jpg" alt="" height="300px">
                    </div>
                </div>
                <div class="col-md-9 d-flex align-items-center">
                    <div class="container">

                        <div class="fs-2x fw-bold mb-5">
                            {{ $data->name }}
                        </div>
                        <div class="row d-flex">
                            <div class="col-auto mb-5">
                                <i class="fas fa-solid fa-briefcase fs-3"></i> : {{ $data->category->name }}
                            </div>
                            <div class="col-auto mb-5">
                                <i class="fas fa-solid fa-location-dot fs-3"></i> : {{ $data->location_id }}
                            </div>
                            <div class="col-auto mb-5">
                                <i class="fas fa-regular fa-clock fs-3"></i> :
                                {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-5 ">
                <div class="fs-5 mb-3">
                    Lamaran Ditutup : <a href="" class="text-primary fw-bolder">
                        {{ \Carbon\Carbon::parse($data->expired_date)->toFormattedDateString() }} </a>
                </div>
                <a href="#" class="btn btn-lg btn-primary m-1 col-8">Apply JOB</a>
                <a href="#" class="btn btn-lg btn-light m-1 btn-icon col-4"><i
                        class="fas fa-regular fa-bookmark"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mb-10">
            <div class="container p-5">
                <div class="mb-8">
                    <h3>Deskripsi</h3>
                    {!! $data->deskripsi !!}
                </div>
                <div class="mb-8">
                    <h3>Lokasi Kerja</h3>
                    {!! $data->location_id !!}
                </div>
                <div class="mb-8">
                    <h3>Waktu Bekerja</h3>
                    {!! $data->waktu_kerja !!}
                </div>
                <div class="mb-8">
                    <h3>Waktu Istirahat</h3>
                    {!! $data->waktu_istirahat !!}
                </div>
                <div class="mb-8">
                    <h3>Hari Libur Kerja</h3>
                    {!! $data->hari_libur !!}
                </div>
                <div class="mb-8">
                    <h3>Informasi Gaji</h3>
                    {!! $data->info_gaji !!}
                </div>
                <div class="mb-8">
                    <h3>Catatan</h3>
                    {!! $data->catatan !!}
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-secondary rounded-4 ">
            <div class="p-5">
                <h1>Gambaran Pekerjaan</h1>
            </div>
        </div>
    </div>
@endsection
