@extends('layouts.default')

@section('content')
    <div class="row d-flex">

        @foreach ($data as $item)
            <div class="col-md-4 mb-5">
                <div class="card border-1">
                    <div class="card-header">
                        <h3 class="card-title">{{ $item->name }}</h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-light">
                                Open
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="las la-briefcase fs-4x"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="row d-flex">
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Expired : </b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-envelope"></i> <b>Total Pelamar : </b></a>

                                    </div>
                                    <div class="col-md-6 fs-7 mb-5">
                                        <a><i class="fa-solid fa-bookmark"></i> <b>Total Disimpan: </b></a>

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

    </div>
@endsection
