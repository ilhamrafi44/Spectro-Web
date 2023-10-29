@extends('layouts.polos')
@section('content')
    <!--begin::Content--> <!--begin::Faq main-->
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <i class="ki-duotone ki-notification-bing fs-2hx text-primary me-4 mb-5 mb-sm-0"><span class="path1"></span><span
                class="path2"></span><span class="path3"></span></i>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h4 class="fw-semibold">Kelengkapan Data {{ $check_complete }}%</h4>
            <!--end::Title-->

            <!--begin::Content-->
            <span>
                @if ($check_complete < 85)
                    Presentase kelengkapan data anda adalah {{ $check_complete }}%, Silahkan lengkapi data lebih dari 85%
                    agar bisa melamar pekerjaan
                @endif
            </span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
            data-bs-dismiss="alert">
            <i class="ki-duotone ki-cross fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
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
                        Total Pekerjaan dilamar
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
                        <i class="ki-duotone ki-bookmark-2 text-info fs-4x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="col-9">

                        <div class="fs-2 fw-bolder">
                            {{ $total_saved }}
                        </div>
                        Total Pekerjaan Disimpan
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mb-10">
            <div class="card card-bordered">
                <div class="card-body">
                    <h3>Profile Views 7 Hari Terakhir</h3>
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
    </div>
    <!--end::Content wrapper-->
    <!--end::App-->
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
