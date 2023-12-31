@extends('layouts.landing')

@section('content')
    <div class="container">
        <h1>Cari Kandidate</h1>
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
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Usia</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping">Min:</span>
                                <input type="number" name="usia" class="form-control" placeholder="25">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Tinggi Badan</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping">Min:</span>
                                <input type="number" name="tinggi_badan" class="form-control" placeholder="25">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Kualifikasi</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                        class="fas fa-solid fa-briefcase fs-3"></i></span>
                                <select class="form-select" aria-label="Select example" data-control="select2"
                                    name="pendidikan_terakhir">
                                    <option value="" selected>Pilih Kualifikasi</option>
                                    @foreach ($experience as $item_c)
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
                        <button class="btn btn-secondary col-12 mt-3" type="button" onclick="resetForm()">Reset</button>

                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="px-5">
                    <div class="row d-flex justify-content-between align-items-center mb-5">
                        <div class="col-auto">
                            <h3>Total Kandidate : {{ $data->count() }}</h3>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($data as $candidate)
                            <a href="{{ route('detai.candidate', ['id' => $candidate->id]) }}"
                                class="card hover-elevate-up border parent-hover mb-6">
                                <div class="card-body">
                                    <div class="d-flex row">
                                        <div class="col-md-2 d-flex align-items-center">
                                            <div class="mb-5">
                                                @if ($candidate->file_profile_id == null)
                                                    <img src="/assets/media/employer-avatar.jpg" alt=""
                                                        class="employer-image">
                                                @else
                                                    <img src="/storage/file/images/profile/{{ $candidate->file_profile_id }}"
                                                        alt="" class="employer-image">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-10">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3> {{ $candidate->name }} </h3>
                                                <button class="btn btn-sm btn-light m-1 btn-icon col-4 "><i
                                                        class="fas fa-regular fa-bookmark"></i></button>
                                            </div>
                                            <hr>
                                            <div class="row d-flex mt-7">
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-solid fa-briefcase fs-3"></i>
                                                    {{ $candidate->candidate_profile->jurusan ?? 'Tidak Ada' }}
                                                </div>
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-solid fa-location-dot fs-3"></i>
                                                    {{ $candidate->candidate_profile->kota ?? 'Tidak Ada'}}
                                                </div>
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-regular fa-clock fs-3"></i>
                                                    {{ $candidate->candidate_profile->usia ?? 'Tidak Ada'}} Tahun
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
@push('scripts')
    <script>
        function resetForm() {
            // Dapatkan URL saat ini tanpa parameter
            let baseUrl = window.location.href.split('?')[0];

            // Redirect ke URL tanpa parameter
            window.location.href = baseUrl;
        }
    </script>
@endpush
