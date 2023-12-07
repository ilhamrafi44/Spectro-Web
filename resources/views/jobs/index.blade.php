@extends('layouts.landing')

@section('content')
    <div class="container">
        <h1>Cari Kerja</h1>
        <hr>
    </div>
    <div class="container p-5">
        <div class="row d-flex mb-10 justify-content-between">
            <div class="col-md-3 border rounded-2">
                <div class="p-5">
                    <form action="{{ route('job.index') }}" method="get">
                        @csrf
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Berdasarkan Kata Kunci</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i class="fas fa-solid fa-magnifying-glass fs-3"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Cari..." value="{{ request()->get('name') }}">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Berdasarkan Kategori</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i class="fas fa-solid fa-briefcase fs-3"></i></span>
                                <select class="form-select" aria-label="Pilih Kategori" data-control="select2" name="category_id">
                                    <option value="" selected>Pilih Kategori</option>
                                    @foreach ($category as $item_c)
                                        <option value="{{ $item_c->id }}" {{ request()->get('category_id') == $item_c->id ? 'selected' : '' }}>
                                            {{ $item_c->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Industry</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i class="fas fa-solid fa-briefcase fs-3"></i></span>
                                <select class="form-select" aria-label="Pilih Industry" data-control="select2" name="industry_id">
                                    <option value="" selected>Pilih Industry</option>
                                    @foreach ($industry as $industry)
                                        <option value="{{ $industry->id }}" {{ request()->get('industry_id') == $industry->id ? 'selected' : '' }}>
                                            {{ $industry->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Lokasi</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i class="fas fa-solid fa-location-dot fs-3"></i></span>
                                <select class="form-select" aria-label="Pilih Lokasi" data-control="select2" name="location_id">
                                    <option value="" selected>Pilih Lokasi</option>
                                    @foreach ($location as $loc)
                                        <option value="{{ $loc->location_id }}" {{ request()->get('location_id') == $loc->location_id ? 'selected' : '' }}>
                                            {{ $loc->location_id }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Urutkan Bedasarkan</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i class="fas fa-solid fa-clock fs-3"></i></span>
                                <select class="form-select" aria-label="Pilih Urutan" data-control="select2" name="direction">
                                    <option value="asc" {{ request()->get('direction') == 'asc' ? 'selected' : '' }}>Terlama</option>
                                    <option value="desc" {{ request()->get('direction') == 'desc' ? 'selected' : '' }}>Terbaru</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="" class="fs-4 fw-semibold mb-3">Jumlah Perhalaman</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text bg-white" id="addon-wrapping"><i class="fas fa-solid fa-file-lines fs-3"></i></span>
                                <select class="form-select" aria-label="Pilih Jumlah" data-control="select2" name="per_page">
                                    <option value="10" {{ request()->get('per_page') == '10' ? 'selected' : '' }}>10</option>
                                    <option value="25" {{ request()->get('per_page') == '25' ? 'selected' : '' }}>25</option>
                                    <option value="50" {{ request()->get('per_page') == '50' ? 'selected' : '' }}>50</option>
                                    <option value="100" {{ request()->get('per_page') == '100' ? 'selected' : '' }}>100</option>
                                </select>
                            </div>
                        </div>
                        <!-- Ulangi struktur ini untuk bidang input lainnya agar nilainya tetap menggunakan 'old()' -->

                        <button class="btn btn-spectro col-12" type="submit">Cari</button>
                        <button class="btn btn-secondary col-12 mt-3" type="button" onclick="resetForm()">Reset</button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="px-5">
                    <div class="row d-flex justify-content-between align-items-center mb-5">
                        <div class="col-auto">
                            <h3>Total Pekerjaan : {{ $data->count() }}</h3>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($data as $jobs)
                            <a href="{{ route('job.detail', ['id' => $jobs->id]) }}"
                                class="card hover-elevate-up border parent-hover mb-6">
                                <div class="card-body">
                                    <div class="d-flex row">
                                        <div class="col-md-2 d-flex align-items-center">
                                            <div class="mb-5">
                                                @if ($jobs->user->file_profile_id == null)
                                                    <img src="/assets/media/employer-avatar.jpg" alt=""
                                                        class="employer-image">
                                                @else
                                                    <img src="/storage/file/images/profile/{{ $jobs->user->file_profile_id }}"
                                                        alt="" class="employer-image">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-10">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3> {{ $jobs->name }} </h3>
                                                <button class="btn btn-sm btn-light m-1 btn-icon col-4 "><i
                                                        class="fas fa-regular fa-bookmark"></i></button>
                                            </div>
                                            <hr>
                                            <div class="row d-flex mt-7">
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-solid fa-briefcase fs-3"></i>
                                                    {{ $jobs->category->name }}
                                                </div>
                                                <div class="col-auto mb-5">
                                                    <i class="fas fa-solid fa-location-dot fs-3"></i>
                                                    {{ $jobs->location_id }}
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
