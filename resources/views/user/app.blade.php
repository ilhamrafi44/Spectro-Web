@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="px-5">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-auto">
                                <h3>Total Pekerjaan Dilamar : {{ $data->count() }}</h3>
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
                                            <h3> {{ $jobs->jobs->name }} ({{ $jobs->employer->name }}) </h3>
                                            <div class="d-flex">

                                                <div class="badge badge-warning fs-6 m-1">Pending</div>
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
                                                <a href="{{ route('job.detail', ['id' => $jobs->jobs->id]) }}" class="btn btn-light rounded-pill m-1">Lihat</a>
                                                <a class="btn btn-primary rounded-pill m-1" href="{{ route('jobs.cancel', ['id' => $jobs->id]) }}">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
