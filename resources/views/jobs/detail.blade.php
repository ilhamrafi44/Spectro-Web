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
                                <i class="fas fa-solid fa-briefcase fs-3"></i> {{ $data->category->name }}
                            </div>
                            <div class="col-auto mb-5">

                                {{ $data->location_id }}
                            </div>
                            <div class="col-auto mb-5">
                                <i class="fas fa-regular fa-clock fs-3"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString() }}
                            </div>
                            <div class="col-auto mb-5">
                                <i class="fas fa-solid fa-money-bill-wave fs-3"></i>
                                @if ($data->mata_gaji == 1)
                                    ¥
                                @elseif ($data->mata_gaji == 2)
                                    USD
                                @else
                                    Rp
                                @endif {{ number_format($data->salary) }}
                                / {{ $data->salary_type }}
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
                <form action="{{ route('jobs.apply') }}" method="POST">
                    @if ($check)
                        <button class="btn btn-lg btn-light m-1 col-8" disabled>Already Apply</button>
                    @else
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $data->id }}">
                        <input type="hidden" name="employer_id" value="{{ $data->user->id }}">
                        <button type="submit" class="btn btn-lg btn-primary m-1 col-8">Apply JOB</button>
                    @endif <a href="#" class="btn btn-lg btn-light m-1 btn-icon col-4"><i
                            class="fas fa-regular fa-bookmark"></i></a>
                </form>
            </div>
        </div>
    </div>

    <div class="row d-flex">
        <div class="col-md-8 mb-5">
            <div class="container p-5">
                <div class="mb-8">
                    <h3 class="mb-4">Deskripsi</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->deskripsi !!}
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Lokasi Kerja</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->location_id !!}
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Waktu Bekerja</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->waktu_kerja !!}
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Waktu Istirahat</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->waktu_istirahat !!}
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Hari Libur Kerja</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->hari_libur !!}
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Jumlah Yang Akan Dipekerjakan</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->jumlah_kandidat !!} Orang
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Informasi Gaji</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->info_gaji !!}
                    </div>
                </div>
                <div class="mb-8">
                    <h3 class="mb-4">Informasi Tunjangan</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->info_tunjangan !!}
                    </div>
                </div>
                <div class=5">
                    <h3 class="mb-4">Catatan</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->catatan !!}
                    </div>
                </div>
                <h3>Share This Post : </h3>
                <div class="d-flex flex-columns mt-5">
                    <div class="mr-4">
                        <a href="http://www.facebook.com/sharer.php?s=100&amp;u="
                            class="btn hover-elevate-up border parent-hover rounded-pill text-white"
                            style="background-color: #1967D2;"><i class="far fa-brands fa-facebook-f text-white"></i>
                            Facebook</a>
                    </div>
                    <div class="mr-4">
                        <a href="http://www.facebook.com/sharer.php?s=100&amp;u="
                            class="btn hover-elevate-up border parent-hover rounded-pill text-white"
                            style="background-color: #FF3A67;"><i class="far fa-brands fa-instagram text-white"></i>
                            Instagram</a>
                    </div>
                    <div class="mr-4">
                        <a href="http://www.facebook.com/sharer.php?s=100&amp;u="
                            class="btn hover-elevate-up border parent-hover rounded-pill text-white"
                            style="background-color: #000000;"><i class="far fa-brands fa-twitter text-white"></i>
                            Twitter</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row d-flex">
                <div class="col-12 bg-secondary rounded-4 mb-5">
                    <div class="container p-5">
                        <h3>Gambaran Pekerjaan</h3>
                        <br>
                        <div class="mb-2 fs-5 row d-flex align-items-center">
                            <div class="col-2 text-center my-3">
                                <i class="far  fa-regular fa-calendar fs-2qx"> </i>
                            </div>
                            <div class="col-9">
                                Tanggal Di Posting : <b>
                                    {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString() }} </b>
                            </div>
                        </div>
                        <div class="mb-2 fs-5 row d-flex align-items-center">
                            <div class="col-2 text-center my-3">
                                <i class="far  fa-regular fa-hourglass-half fs-2qx"> </i>
                            </div>
                            <div class="col-9">
                                Tanggal Kedaluarsa : <b>
                                    {{ \Carbon\Carbon::parse($data->expired_date)->toFormattedDateString() }} </b>
                            </div>
                        </div>
                        <div class="mb-2 fs-5 row d-flex align-items-center">
                            <div class="col-2 text-center my-3">
                                <i class="far fa-solid fa-location-dot fs-2qx"></i>
                            </div>
                            <div class="col-9"> Lokasi : <b>
                                    {{ $data->location_id }} </b>
                            </div>
                        </div>
                        <div class="mb-2 fs-5 row d-flex align-items-center">
                            <div class="col-2 text-center my-3">
                                <i class="far fa-solid fa-briefcase fs-2qx"></i>
                            </div>
                            <div class="col-9"> Job Type : <b>
                                    {{ $data->job_types->name }} </b>
                            </div>
                        </div>
                        <div class="mb-2 fs-5 row d-flex align-items-center">
                            <div class="col-2 text-center my-3">
                                <i class="far fa-solid fa-money-bill-wave fs-2qx"></i>
                            </div>
                            <div class="col-9"> Gaji Yang Ditawarkan : <b>
                                    @if ($data->mata_gaji == 1)
                                        ¥
                                    @elseif ($data->mata_gaji == 2)
                                        USD
                                    @else
                                        Rp
                                    @endif {{ number_format($data->salary) }}
                                    / {{ $data->salary_type }}
                                </b>
                            </div>
                        </div>
                        <div class="mb-2 fs-5 row d-flex align-items-center">
                            <div class="col-2 text-center my-3">
                                <i class="far fa-solid fa-venus-mars fs-2qx"></i>
                            </div>
                            <div class="col-9"> Jenis Kelamin : <b>
                                    {{ $data->jenis_kelamin }} </b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 bg-secondary rounded-4 mb-10">
                    <div class="p-5">
                        <h3>{{ $data->user->name }}</h3>
                        <h6>{{ $data->user->email }}</h6>
                        Penanggung Jawab Pekerjaan ini :
                        <hr>
                        @foreach ($pics as $item_pic)
                            <div class="mb-5 fs-5">
                                Nama : <b>{{ $item_pic->karyawan->nama }}</b>
                            </div>
                        @endforeach
                        <hr>
                        <a href="{{ route('detai.employer', ['id' => $data->user->id]) }}"
                            class="btn btn-primary col-12">Lihat Perusahaan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mb-10">
            <div class="container p-5">
                <h1>List Related Job :</h1>
            </div>
        </div>
    </div>
@endsection
