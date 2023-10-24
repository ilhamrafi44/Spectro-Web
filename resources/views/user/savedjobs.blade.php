{{-- @extends('layouts.default')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="px-5">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-auto">
                                <h3>Total Pekerjaan Disimpan : {{ $data->count() }}</h3>
                            </div>
                            <div class="col-auto">
                                <div class="row d-flex align-items-center justify-content-end">
                                    <div class="col-auto mb-5">
                                        <label for="">Urut Bedasarkan</label>
                                        <select class="form-select" aria-label="Select example" data-control="select2"
                                            name="category_id">
                                            <option value="1">Default</option>
                                            <option value="1">Terbaru</option>
                                        </select>
                                    </div>
                                    <div class="col-auto mb-5">
                                        <label for="">Tampilkan Data</label>
                                        <select class="form-select" aria-label="Select example" data-control="select2"
                                            name="category_id">
                                            <option value="1">10 Perhalaman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($data as $jobs)
                                <div class="card hover-elevate-up border parent-hover mb-6">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3> {{ $jobs->jobs->name }} ({{ $jobs->jobs->user->name }}) </h3>
                                            <div class="d-flex">
                                                @if ($jobs->status == 1)
                                                    <div class="badge badge-warning fs-6 m-1">Pending</div>
                                                @elseif ($jobs->status == 2)
                                                    <div class="badge badge-success fs-6 m-1">Approved</div>
                                                @elseif ($jobs->status == 3)
                                                    <div class="badge badge-danger fs-6 m-1">Rejected</div>
                                                @elseif ($jobs->status == 4)
                                                    <div class="badge badge-danger fs-6 m-1">Canceled</div>
                                                @endif
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row d-flex mt-7">
                                            <div class="col-auto mb-5">
                                                <i class="fas fa-solid fa-briefcase fs-3"></i>
                                                {{ $jobs->jobs->category->name }}
                                            </div>
                                            <div class="col-auto mb-5">
                                                <i class="fas fa-solid fa-location-dot fs-3"></i>
                                                {{ $jobs->jobs->location_id }}
                                            </div>
                                            <div class="col-auto mb-5">
                                                <i class="fas fa-regular fa-clock fs-3"></i>
                                                {{ \Carbon\Carbon::parse($jobs->jobs->created_at)->toFormattedDateString() }}
                                            </div>
                                            <div class="col-auto mb-5">
                                                <i class="fas fa-solid fa-money-bill-wave fs-3"></i>
                                                @if ($jobs->jobs->mata_gaji == 1)
                                                    ¥
                                                @elseif ($jobs->jobs->mata_gaji == 2)
                                                    USD
                                                @else
                                                    Rp
                                                @endif {{ number_format($jobs->jobs->salary) }}
                                                / {{ $jobs->jobs->salary_type }}
                                            </div>
                                            <div class="col-auto mb-5">
                                                | Dilamar :
                                                {{ \Carbon\Carbon::parse($jobs->created_at)->toFormattedDateString() }}
                                            </div>
                                            <div class="col-auto mb-5 ms-auto">
                                                <a class="btn btn-primary rounded-pill m-1"
                                                    href="{{ route('jobs.saved.destroy', ['id' => $jobs->id]) }}">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $data->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 --}}

@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="py-5">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-4 border mb-5 rounded-4">
                                <div class="p-5">

                                    <form action="{{ route('jobs.saved') }}" method="get">
                                        @csrf
                                        <div class="mb-5">
                                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan Kata
                                                Kunci</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                                        class="fas fa-solid fa-magnifying-glass fs-3"></i></span>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Cari...">
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan
                                                Kategori</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                                        class="fas fa-solid fa-briefcase fs-3"></i></span>
                                                <select class="form-select" aria-label="Select example"
                                                    data-control="select2" name="category_id">
                                                    <option value="" selected>Pilih Kategori</option>
                                                    @foreach ($category as $item_c)
                                                        <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan
                                                Industry</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                                        class="fas fa-solid fa-briefcase fs-3"></i></span>
                                                <select class="form-select" aria-label="Select example"
                                                    data-control="select2" name="industry_id">
                                                    <option value="" selected>Pilih Industry</option>

                                                    @foreach ($industry as $industry)
                                                        <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label for="" class="fs-4 fw-semibold mb-3">Cari Bedasarkan
                                                Lokasi</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                                        class="fas fa-solid fa-location-dot fs-3"></i></span>
                                                <select class="form-select" aria-label="Select example"
                                                    data-control="select2" name="location_id">
                                                    <option value="" selected>Pilih Lokasi</option>

                                                    @foreach ($location as $loc)
                                                        <option value="{{ $loc->location_id }}">{{ $loc->location_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <label for="" class="fs-4 fw-semibold mb-3">Urutkan Bedasarkan</label>
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping"><i
                                                        class="fas fa-solid fa-clock fs-3"></i></span>
                                                <select class="form-select" aria-label="Select example"
                                                    data-control="select2" name="direction">
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
                                                <select class="form-select" aria-label="Select example"
                                                    data-control="select2" name="per_page">
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
                            <div class="col-md-8">
                                <div class="p-5">

                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-auto mb-5">
                                            <h3>Total Pekerjaan Dilamar : {{ $data->count() }}</h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach ($data as $jobs)
                                            <div class="card hover-elevate-up border parent-hover mb-6">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h3> {{ $jobs->jobs->name }} ({{ $jobs->jobs->user->name }}) </h3>
                                                        <div class="d-flex">
                                                            @if ($jobs->status == 1)
                                                                <div class="badge badge-warning fs-6 m-1">Pending</div>
                                                            @elseif ($jobs->status == 2)
                                                                <div class="badge badge-success fs-6 m-1">Approved</div>
                                                            @elseif ($jobs->status == 3)
                                                                <div class="badge badge-danger fs-6 m-1">Rejected</div>
                                                            @elseif ($jobs->status == 4)
                                                                <div class="badge badge-danger fs-6 m-1">Canceled</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex mt-7">
                                                        <div class="col-auto mb-5">
                                                            <i class="fas fa-solid fa-briefcase fs-3"></i>
                                                            {{ $jobs->jobs->category->name }}
                                                        </div>
                                                        <div class="col-auto mb-5">
                                                            <i class="fas fa-solid fa-location-dot fs-3"></i>
                                                            {{ $jobs->jobs->location_id }}
                                                        </div>
                                                        <div class="col-auto mb-5">
                                                            <i class="fas fa-regular fa-clock fs-3"></i>
                                                            {{ \Carbon\Carbon::parse($jobs->jobs->created_at)->toFormattedDateString() }}
                                                        </div>
                                                        <div class="col-auto mb-5">
                                                            <i class="fas fa-solid fa-money-bill-wave fs-3"></i>
                                                            @if ($jobs->jobs->mata_gaji == 1)
                                                                ¥
                                                            @elseif ($jobs->jobs->mata_gaji == 2)
                                                                USD
                                                            @else
                                                                Rp
                                                            @endif
                                                            {{ number_format($jobs->jobs->salary) }}
                                                            / {{ $jobs->jobs->salary_type }}
                                                        </div>
                                                        <div class="col-auto mb-5">
                                                            | Dilamar :
                                                            {{ \Carbon\Carbon::parse($jobs->created_at)->toFormattedDateString() }}
                                                        </div>
                                                        <div class="col-auto mb-5 ms-auto">
                                                            <a class="btn btn-primary rounded-pill m-1"
                                                                href="{{ route('jobs.saved.destroy', ['id' => $jobs->id]) }}">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if ($data->count() > 0)
                                            <!-- Tampilkan link pagination -->
                                            {{ $data->appends(request()->except('page'))->links() }}
                                        @else
                                            <h1 class="text-center">No data found.</h1>
                                        @endif
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