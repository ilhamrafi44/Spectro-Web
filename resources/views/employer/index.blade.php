@extends('layouts.landing')

@section('content')
    <div class="container">
        <h1>Cari Employer</h1>
        <hr>
    </div>
    <div class="container p-5">
        <div class="row d-flex mb-10 justify-content-between">
            <div class="col-md-3 border rounded-2">
                <div class="p-5">
                    <form method="get">
                        @csrf
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Nama</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                        class="fas fa-solid fa-magnifying-glass fs-3"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Cari...">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Kategori</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                        class="fas fa-solid fa-briefcase fs-3"></i></span>
                                <select class="form-select" aria-label="Select example" data-control="select2"
                                    name="industry">
                                    <option value="" selected>Pilih Kualifikasi</option>
                                    @foreach ($industry as $item_c)
                                        <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Urutkan Bedasarkan</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                        class="fas fa-solid fa-clock fs-3"></i></span>
                                <select class="form-select" aria-label="Select example" data-control="select2"
                                    name="direction">
                                    <option value="asc">Terlama</option>
                                    <option value="desc">Terbaru</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Jumlah Perhalaman</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                        class="fas fa-solid fa-file-lines fs-3"></i></span>
                                <select class="form-select" aria-label="Select example" data-control="select2"
                                    name="per_page">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-spectro col-12" type="submit">Cari</button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="px-5">
                    <div class="row d-flex justify-content-between align-items-center mb-5">
                        <div class="col-auto">
                            <h3>Total Employer : {{ $data->count() }}</h3>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($data as $employer)
                            <a href="{{ route('detai.employer', ['id' => $employer->id]) }}"
                                class="card hover-elevate-up border parent-hover mb-6">
                                <div class="card-body">
                                    <div class="d-flex row">
                                        <div class="col-md-2">
                                            <div class="symbol symbol-100px symbol-lg-100px symbol-fixed mb-5">
                                                @if ($employer->file_profile_id == null)
                                                    <img src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" alt=""
                                                        height="300px">
                                                @else
                                                    <img src="/storage/file/images/profile/{{ $employer->file_profile_id }}"
                                                        alt="" height="300px">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-10">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3> {{ $employer->name }} </h3>
                                                <button class="btn btn-sm btn-light m-1 btn-icon col-4 "><i
                                                        class="fas fa-regular fa-bookmark"></i></button>
                                            </div>
                                            <hr>
                                            <div class="row d-flex mt-7">
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-solid fa-briefcase fs-3"></i>
                                                    Total Pekerjaan : {{ $employer->employer_job->count() ?? 'Tidak Ada' }}
                                                </div>
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-solid fa-location-dot fs-3"></i>
                                                    Alamat : {{ $employer->employer_profile->negara ?? 'Tidak Ada'}}, {{ $employer->employer_profile->alamat ?? 'Tidak Ada'}}
                                                </div>
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-regular fa-clock fs-3"></i>
                                                    Tahun Pendirian : {{ $employer->employer_profile->tahun_pendirian ?? 'Tidak Ada'}} Tahun
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        @if ($data->count() > 0)
                            <!-- Tampilkan link pagination -->
                            {{ $data->appends(request()->query())->links() }}
                        @else
                            @include('layouts.data404')
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
