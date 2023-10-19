@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-12 mb-10">
            <div class="card card-bordered">
                <div class="card-body">
                    <h1>Profile Views 7 Hari Terakhir</h1>
                    <div id="kt_apexcharts_3" style="height: 350px;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>List Pelamar Terbaru</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Tanggal Apply</th>
                                    <th>Nama Lengkap</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>22 Oktober 2023</td>
                                    <td>Raihan Permadi</td>
                                    <td>3 Tahun</td>
                                    <td> <a href="" class="btn btn-sm btn-icon rounded-circle btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon rounded-circle btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15 Oktober 2023</td>
                                    <td>Ilham Rafi</td>
                                    <td>50 Tahun</td>
                                    <td><a href="" class="btn btn-sm btn-icon rounded-circle btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon rounded-circle btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10 Oktober 2023</td>
                                    <td>Ayii Ramadhan</td>
                                    <td>2 Tahun</td>
                                    <td><a href="" class="btn btn-sm btn-icon rounded-circle btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon rounded-circle btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8 Oktober 2023</td>
                                    <td>Hangga Budhi</td>
                                    <td>4 Tahun</td>
                                    <td><a href="" class="btn btn-sm btn-icon rounded-circle btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon rounded-circle btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="" class="text-center">Lihat Semua... </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <h1>List Private Chat</h1>
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Form-->
                            <form class="w-100 position-relative" autocomplete="off">
                                <!--begin::Icon-->
                                <i
                                    class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                        class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid px-13" name="search"
                                    value="" placeholder="Search by username or email..." />
                                <!--end::Input-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-5" id="kt_chat_contacts_body">
                            <!--begin::List-->
                            <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                                data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                                data-kt-scroll-offset="5px">

                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px symbol-circle "><span
                                                class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">M</span>
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Lat seen-->
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">1 week</span>

                                    </div>
                                    <!--end::Lat seen-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px symbol-circle "><span
                                                class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Lat seen-->
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">5 hrs</span>
                                    </div>
                                    <!--end::Lat seen-->

                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px symbol-circle "><span
                                                class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">S</span>
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Lat seen-->
                                    <div class="d-flex flex-column align-items-end ms-2">
                                        <span class="text-muted fs-7 mb-1">2 weeks</span>

                                    </div>
                                    <!--end::Lat seen-->
                                </div>
                                <!--end::User-->


                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Card body-->
                    </div>
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
