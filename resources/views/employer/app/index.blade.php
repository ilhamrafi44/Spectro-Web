@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="px-5">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-auto">
                                <h3>Total Pelamar : {{ $data->count() }}</h3>
                            </div>
                            <div class="col-auto">
                                <div class="row d-flex align-items-center justify-content-end">
                                    <div class="col-auto mb-5">
                                        <label for="">Filter Pekerjaan</label>
                                        <select class="form-select" aria-label="Select example" data-control="select2"
                                            name="category_id">
                                            @foreach ($data_job as $itemz)
                                            <option value="{{ $itemz->id }}">{{ $itemz->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
                                            <h3> {{ $jobs->candidate->name }} - {{ $jobs->jobs->name }}</h3>
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
                                                Melamar Pada :
                                                {{ \Carbon\Carbon::parse($jobs->created_at)->toFormattedDateString() }}
                                            </div>
                                            <div class="col-auto mb-5 ms-auto">
                                                <a href="{{ route('job.detail', ['id' => $jobs->jobs->id]) }}" class="btn btn-light rounded-pill m-1">Lihat</a>
                                                <a class="btn btn-sm fs-8 btn-primary rounded-pill m-1" href="{{ route('jobs.reject', ['id' => $jobs->id]) }}">Reject</a>
                                                <a class="btn btn-sm fs-8 btn-success rounded-pill m-1" href="{{ route('jobs.approve', ['id' => $jobs->id]) }}">Approve</a>
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
