@extends('layouts.polos')

@section('content')
    <div class="row">
        <div class="col-md-3 mb-5">
            <div class="card card-body p-5">
                <div class="row d-flex">
                    <div class="col-3">
                        <i class="ki-duotone ki-briefcase fs-4x text-spectro">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="col-9">
                        <div class="fs-2 fw-bolder">
                            {{ $total_apply }}
                        </div>
                        Total Pekerjaan Saya
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card card-body p-5">
                <div class="row d-flex">
                    <div class="col-3">
                        <i class="ki-duotone ki-eye fs-4x text-warning">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div class="col-9">
                        <div class="fs-2 fw-bolder">
                            {{ $total_views }}
                        </div>
                        Total Profile Views
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card card-body p-5">
                <div class="row d-flex">
                    <div class="col-3">
                        <i class="ki-duotone ki-message-text-2 text-success fs-4x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div class="col-9">
                        <div class="fs-2 fw-bolder">
                            {{ $total_comments }}
                        </div>
                        Total Review
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card card-body p-5">
                <div class="row d-flex">
                    <div class="col-3">
                        <i class="ki-duotone fs-4x text-info ki-brifecase-tick">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div class="col-9">
                        <div class="fs-2 fw-bolder">
                            {{ $total_apply }}
                        </div>
                        Total Pelamar
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mb-10">
            <div class="card card-bordered">
                <div class="card-body">
                    <h1>Profile Views 7 Hari Terakhir</h1>
                    <div id="kt_apexcharts_3" style="height: 350px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-10">
            <div class="card card-bordered">
                <div class="card-header">
                    <h3 class="mb-5 card-title fs-3 fw-bold">Notifikasi</h3>
                </div>
                <div class="card-body card-scroll h-400px">
                    <div class="table-responsive">
                        <table class="table table-striped gy-7 gs-7">
                            <tbody>
                                @forelse ($notifications as $notif)
                                    <tr>
                                        <td>
                                            <p>
                                                {{ $notif->message }}
                                            </p>
                                            <span
                                                class="text-muted">{{ \Carbon\Carbon::parse($notif->created_at)->diffForHumans() }}</span>

                                        </td>
                                    </tr>
                                @empty
                                    @include('layouts.data404')
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>List Pelamar Terbaru</h1>
                    <div class="table-responsive">
                        <table class="table table-striped gy-7 gs-7">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Waktu</th>
                                    <th>Pekerjaan</th>
                                    <th>Nama Candidate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($applys as $lamaran)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($lamaran->created_at)->diffForHumans() }}</td>
                                        <td>{{ $lamaran->jobs->name }}</td>
                                        <td>{{ $lamaran->candidate->name }}</td>
                                    </tr>
                                @empty
                                    @include('layouts.data404')
                                @endforelse
                            </tbody>
                        </table>
                        <a href="{{ route('employer.app') }}" class="text-center">Lihat Semua... </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h1>List Private Chat</h1>
                    <a href="{{ route('conversations.index') }}" class="btn btn-lg btn-spectro col-12 mt-5">Lihat Chat</a>
                    <!--end::Contacts-->
                </div>
            </div>
        @endsection

        @push('scripts')
            <script>
                var element = document.getElementById('kt_apexcharts_3');

                var height = parseInt(KTUtil.css(element, 'height'));
                var labelColor = KTUtil.getCssVariableValue('--kt-gray-500');
                var borderColor = KTUtil.getCssVariableValue('--bs-gray-500');
                var baseColor = KTUtil.getCssVariableValue('--bs-spectro');
                var lightColor = KTUtil.getCssVariableValue('--bs-spectro-shade');

                // if (!element) {
                //     return alert('Error');
                // }

                var options = {
                    series: [{
                        name: 'Profile Views',
                        data: [
                            @foreach ($chart as $datas)
                                "{{ $datas['total_data'] }}",
                            @endforeach
                        ]
                    }],
                    chart: {
                        fontFamily: 'inherit',
                        type: 'area',
                        height: height,
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {

                    },
                    legend: {
                        show: false
                    },
                    dataLabels: {
                        enabled: false
                    },
                    fill: {
                        type: 'solid',
                        opacity: 1
                    },
                    stroke: {
                        curve: 'smooth',
                        show: true,
                        width: 3,
                        colors: [baseColor]
                    },
                    xaxis: {
                        categories: [
                            @foreach ($chart as $datas)
                                "{{ $datas['date'] }}",
                            @endforeach
                        ],
                        axisBorder: {
                            show: false,
                        },
                        axisTicks: {
                            show: false
                        },
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '12px'
                            }
                        },
                        crosshairs: {
                            position: 'front',
                            stroke: {
                                color: baseColor,
                                width: 1,
                                dashArray: 3
                            }
                        },
                        tooltip: {
                            enabled: true,
                            formatter: undefined,
                            offsetY: 0,
                            style: {
                                fontSize: '12px'
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: labelColor,
                                fontSize: '12px'
                            }
                        }
                    },
                    states: {
                        normal: {
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        },
                        hover: {
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        },
                        active: {
                            allowMultipleDataPointsSelection: false,
                            filter: {
                                type: 'none',
                                value: 0
                            }
                        }
                    },
                    tooltip: {
                        style: {
                            fontSize: '12px'
                        },
                        y: {
                            formatter: function(val) {
                                return val + ' kunjungan'
                            }
                        }
                    },
                    colors: [lightColor],
                    grid: {
                        borderColor: borderColor,
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: true
                            }
                        }
                    },
                    markers: {
                        strokeColor: baseColor,
                        strokeWidth: 3
                    }
                };

                var chart = new ApexCharts(element, options);
                chart.render();
            </script>
        @endpush
