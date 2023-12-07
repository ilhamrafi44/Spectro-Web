@extends('layouts.landing')

@section('content')
    <div class="row d-flex rounded-4 bg-secondary align-items-center mb-10">
        <div class="col-md-8 p-5">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <div class="mb-5">
                        @if ($data->user->file_profile_id == null)
                            <img src="/assets/media/employer-avatar.jpg" alt="" class="employer-image">
                        @else
                            <img src="/storage/file/images/profile/{{ $data->user->file_profile_id }}" alt="" class="employer-image">
                        @endif
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
                                <i class="fas fa-solid fa-location-dot fs-3"></i>
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
                    Lamaran Ditutup : <a class="text-primary fw-bolder">
                        {{ \Carbon\Carbon::parse($data->expired_date)->toFormattedDateString() }} </a>
                </div>
                <form action="{{ route('jobs.apply') }}" method="POST">
                    <div class="row d-flex align-items-center">

                        @php
                        $expired_date = \Carbon\Carbon::parse($data->expired_date);
                        @endphp


                        @if ($expired_date->isPast())
                            <div class="col-auto">
                                <button class="btn btn-lg btn-light" disabled>Jobs Expired</button>
                            </div>
                        @else
                            @if ($check)
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-light" disabled>Already Apply</button>
                                </div>
                            @elseif (Auth::user())
                                @if (Auth::user()->role == 2)
                                    <div class="col-auto">

                                        <button class="btn btn-lg btn-light" disabled>You Cannot Apply</button>
                                    </div>
                                @else
                                    @csrf
                                    <input type="hidden" name="job_id" value="{{ $data->id }}">
                                    <input type="hidden" name="employer_id" value="{{ $data->user->id }}">
                                    <div class="col-auto">

                                        <button type="submit" class="btn btn-lg btn-primary">Apply JOB</button>
                                    </div>
                                @endif
                            @else
                                @csrf
                                <input type="hidden" name="job_id" value="{{ $data->id }}">
                                <input type="hidden" name="employer_id" value="{{ $data->user->id }}">
                                <div class="col-auto">

                                    <button type="submit" class="btn btn-lg btn-primary">Apply JOB</button>
                                </div>
                            @endif
                        @endif
                        @if ($check_saved)
                            <div id="response" class="col-2">
                                <button type="button" onclick="destroy({{ $data->id }})"
                                    class="btn btn-lg btn-light btn-icon col-1 delete"><i
                                        class="fas fa-regular fa-bookmark text-success"></i></button>
                            </div>
                        @else
                            <div id="response" class="col-2">
                                <button type="button" class="btn btn-lg btn-light btn-icon col-1 save"
                                    onclick="save({{ $data->id }})"><i class="fas fa-regular fa-bookmark"></i></button>
                            </div>
                        @endif
                    </div>
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
                <div class="mb-8">
                    <h3 class="mb-4">Level Karir</h3>
                    <div class="text-gray-700 d-block fw-semibold fs-4 ">
                        {!! $data->careers->name !!}
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
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                            class="btn hover-elevate-up border parent-hover rounded-pill text-white"
                            style="background-color: #1967D2;"><i class="far fa-brands fa-facebook-f text-white"></i>
                            Facebook</a>
                    </div>
                    <div class="mr-4">
                        <a href="https://twitter.com/share?url={{ url()->full() }}"
                            class="btn hover-elevate-up border parent-hover rounded-pill text-white"
                            style="background-color: #000000;"><i class="far fa-brands fa-twitter text-white"></i>
                            Twitter</a>
                    </div>
                    <div class="mr-4">
                        <a href="https://www.linkedin.com/shareArticle?url={{ url()->full() }}"
                            class="btn hover-elevate-up border parent-hover rounded-pill text-white"
                            style="background-color: #196fd8;"><i class="far fa-brands fa-linkedin text-white"></i>
                            Linkedin</a>
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
                                    {{ $data->job_types->name ?? 'Data Tidak Tersedia'}} </b>
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
                                Nama : <b>{{ $item_pic->karyawan->nama }}</b><br>
                                Email : <b>{{ $item_pic->karyawan->email }}</b>
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
                <br>
                @forelse ($related as $jobs)
                    <a href="{{ route('job.detail', ['id' => $jobs->id]) }}"
                        class="card hover-elevate-up border parent-hover">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3> {{ $jobs->name }} </h3>
                                <button class="btn btn-sm btn-light m-1 btn-icon col-4 "><i
                                        class="fas fa-regular fa-bookmark"></i></button>
                            </div>
                            <hr>
                            <div class="row d-flex mt-7">
                                <div class="col-auto mb-5">
                                    <i class="fas fa-solid fa-briefcase fs-3"></i> {{ $jobs->category->name }}
                                </div>
                                <div class="col-auto mb-5">
                                    <i class="fas fa-solid fa-location-dot fs-3"></i> {{ $jobs->location_id }}
                                </div>
                                <div class="col-auto mb-5">
                                    <i class="fas fa-regular fa-clock fs-3"></i>
                                    {{ \Carbon\Carbon::parse($jobs->created_at)->toFormattedDateString() }}
                                </div>
                                <div class="col-auto mb-5">
                                    <i class="fas fa-solid fa-money-bill-wave fs-3"></i>
                                    @if ($jobs->mata_gaji == 1)
                                        ¥
                                    @elseif ($jobs->mata_gaji == 2)
                                        USD
                                    @else
                                        Rp
                                    @endif {{ number_format($jobs->salary) }}
                                    / {{ $jobs->salary_type }}
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <h3>Belum ada Pekerjaan</h3>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function save(idsave) {
            var id = idsave;

            var success =
                '<button onclick="destroy(' + id +
                ')" type="button" class="btn btn-lg btn-light btn-icon col-4 delete" id="destroy' + id +
                '" ><i class="fas fa-regular fa-bookmark text-success"></i></button>';

            var failed = '<span class="badge badge-soft-pink">' +
                'disbale' +
                '</span>';
            $.ajax({
                url: "{{ route('jobs.save') }}",
                type: 'POST',
                dataType: "JSON",
                data: {
                    "job_id": id,
                    "_method": 'post',
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    k = response;
                    if (k.status == 'success') {
                        $('#response').html(success);
                    }
                    // $("#destroy" + id).remove();
                    Swal.fire({
                        text: response.data,
                        icon: response.status,
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
            $('#alert-message').alert('Gagal');
        };

        function destroy(destroy) {
            var id = destroy;

            var success =
                '<button onclick="save(' + id +
                ')" type="button" class="btn btn-lg btn-light btn-icon col-4 save" id="save' + id +
                '" ><i class="fas fa-regular fa-bookmark"></i></button>';

            var failed = '<span class="badge badge-soft-pink">' +
                'disbale' +
                '</span>';
            $.ajax({
                url: "{{ route('jobs.delete') }}",
                type: 'POST',
                dataType: "JSON",
                data: {
                    "job_id": id,
                    "_method": 'post',
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    k = response;
                    if (k.status == 'success') {
                        $('#response').html(success);
                    }
                    // $("#destroy" + id).remove();
                    Swal.fire({
                        text: response.data,
                        icon: response.status,
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success"
                        }
                    });
                }
            });

            $('#alert-message').alert('Error');
        };
    </script>
@endpush
