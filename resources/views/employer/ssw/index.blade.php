@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="py-5">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-12">
                                <div class="p-5">

                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-auto mb-5">
                                            <h3>Total Pekerjaan Diterima : {{ $data->count() }}</h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach ($data as $jobs)
                                            <div class="card hover-elevate-up border parent-hover mb-6">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h3> {{ $jobs->candidate->name }} ({{ $jobs->jobs->name }}) </h3>
                                                        <div class="d-flex">
                                                            @if ($jobs->level == 1)
                                                                <div class="badge badge-info fs-6 m-1">Screening Dokumen
                                                                </div>
                                                            @elseif ($jobs->level == 2)
                                                                <div class="badge badge-info fs-6 m-1">Interview TSK
                                                                </div>
                                                            @elseif ($jobs->level == 3)
                                                                <div class="badge badge-info fs-6 m-1">Interview User
                                                                </div>
                                                            @elseif ($jobs->level == 4)
                                                                <div class="badge badge-info fs-6 m-1">Lolos interview user
                                                                </div>
                                                            @elseif ($jobs->level == 5)
                                                                <div class="badge badge-info fs-6 m-1">Persiapan Pengajuan CoE
                                                                </div>
                                                            @elseif ($jobs->level == 6)
                                                                <div class="badge badge-info fs-6 m-1">Pengajuan e-ID/Jamsostek
                                                                </div>
                                                            @elseif ($jobs->level == 7)
                                                                <div class="badge badge-info fs-6 m-1">Pengajuan VISA</div>
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
                                                            <a href="{{ route('employer.ssw.detail', ['id' => $jobs->id]) }}"
                                                                class="btn btn-danger rounded-pill m-1">Masuk</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if ($data->count() > 0)
                                            <!-- Tampilkan link pagination -->
                                            {{-- {{ $data->appends(request()->except('page'))->links() }} --}}
                                        @else
                                            @include('layouts.data404')
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
