@extends('layouts.default')

@section('content')
    <div class="row d-flex">
        <div class="col-12">
            <form>
                <div class="row d-flex">
                    @csrf
                    <div class="col-md-4">
                        <div class="mb-5 ">
                            <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control"
                                placeholder="Cari Nama..">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="direction">
                                <option value="asc">Terlama</option>
                                <option value="desc">Terbaru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="direction">
                                <option value="">Pilih Employer</option>
                                @foreach ($employer as $item_c)
                                    <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="per_page">
                                <option value="10">10 Data Per Halaman</option>
                                <option value="50">50 Data Per Halaman</option>
                                <option value="100">100 Data Per Halaman</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-spectro col-md-2 mb-10" type="submit">Cari</button>
                </div>
            </form>
        </div>
        @foreach ($data as $item)
            <div class="col-md-6 mb-5">
                <div class="card border-1">
                    <div class="card-header">
                        <h3 class="card-title">{{ $item->name }} - {{ $item->user->name }}</h3>
                        <div class="card-toolbar">
                            <a href="{{ route('job.detail', ['id' => $item->id]) }}"
                                class="btn btn-sm rounded-pill border m-1 btn-light">
                                Open
                            </a>
                            <a href="{{ route('admin.jobs.update', ['id' => $item->id]) }}"
                                class="btn btn-sm rounded-pill border m-1 btn-warning">
                                Edit
                            </a>
                            <button type="button" class="btn btn-sm rounded-pill border m-1 btn-spectro">
                                Delete
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row d-flex">
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi :
                                                {{ $item->location_id }}</b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Expired :
                                                {{ $item->expired_date }}</b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Created :
                                                {{ $item->created_at }}</b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-envelope"></i> <b>Total Pelamar :
                                                {{ $item->apply->count() }}</b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-bookmark"></i> <b>Total Dilihat:
                                                {{ $item->views->count() }}</b></a>

                                    </div>
                                    {{-- <div class="col-6 h-100">
                                    <div class="btn btn-primary w-100"><i class="fa-solid fa-user-plus"></i> Follow </div>
                                </div>
                                <div class="col-6 h-100">
                                    <div class="btn btn-warning w-100"><i class="fa-solid fa-comments"></i>Chat </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if ($data->count() > 0)
            <!-- Tampilkan link pagination -->
            {{ $data->appends(request()->query())->links() }}
        @else
            @include('layouts.data404')
        @endif

    </div>
@endsection
