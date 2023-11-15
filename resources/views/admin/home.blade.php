@extends('layouts.default')

@section('content')
    <!-- 4-blocks row start -->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10 dashboard-header d-flex">
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 bg-primary text-white">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">{{ number_format($user) }}</div>
                    <div class="fs-4 fw-semibold  mb-1">Total User</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 bg-primary text-white">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">{{ number_format($job) }}</div>
                    <div class="fs-4 fw-semibold  mb-1">Total Pekerjaan</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 bg-primary text-white">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">{{ number_format($profile_views) }}</div>
                    <div class="fs-4 fw-semibold  mb-1">Total Pengunjung Profile</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 bg-primary text-white">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">{{ number_format($job_views) }}</div>
                    <div class="fs-4 fw-semibold  mb-1">Total Pengunjung Pekerjaan</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Registration User Chart</h3>
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="start">
                            </div>
                            <div class="col-md-5">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="end">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div id="chart"></div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-5">
                <div class="card-body">
                    <h3>Domination User Chart</h3>
                    <div id="chart_donut"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Domination User Chart</h3>
                    <div id="chart_donuts"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
                <div class="card-body">
                    <h3>10 Job Top Views</h3>

                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 gy-7">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Job ID</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Total Views</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topJobViews as $index => $jobsa)
                                    <tr @if ($index === 0) class="table-warning" @endif>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $jobsa->id }}</td>
                                        <td>{{ $jobsa->name }}</td>
                                        <td>{{ $jobsa->total_views }}</td>
                                        <td><a href="{{ route('job.detail', ['id' => $jobsa->id]) }}"><i
                                                    class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card">
                <div class="card-body">
                    <h3>10 Job Top Apply</h3>

                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 gy-7">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Job ID</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Total Apply</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topJobApp as $index => $sada)
                                    <tr @if ($index === 0) class="table-warning" @endif>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $sada->id }}</td>
                                        <td>{{ $sada->name }}</td>
                                        <td>{{ $sada->total_app }}</td>
                                        <td><a href="{{ route('job.detail', ['id' => $sada->id]) }}"><i
                                                    class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>10 Profile Top Views</h3>

                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 gy-7">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profile ID</th>
                                    <th scope="col">Profile Title</th>
                                    <th scope="col">Total Views</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topProfileViews as $index => $Profilesa)
                                    <tr @if ($index === 0) class="table-warning" @endif>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $Profilesa->id }}</td>
                                        <td>{{ $Profilesa->name }}</td>
                                        <td>{{ $Profilesa->total_views }}</td>
                                        <td>
                                            @if ($Profilesa->role == 1)
                                                <a href="{{ route('detai.candidate', ['id' => $Profilesa->id]) }}"><i
                                                        class="fa fa-eye"></i></a>
                                            @elseif ($Profilesa->role == 2)
                                                <a href="{{ route('detai.employer', ['id' => $Profilesa->id]) }}"><i
                                                        class="fa fa-eye"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 4-blocks row end -->
    <!--begin::Row-->
    <!--end::Row-->
@endsection

@push('scripts')
    <script>
        var options = {
            series: [{{ $verifiedUserCount }}, {{ $unverifiedUserCount }}],
            labels: ['Verified', 'Unverified'],
            chart: {
                type: 'donut',
            },
            colors: ['#6993FF', '#FFC107'],
        };

        var chart = new ApexCharts(document.querySelector("#chart_donuts"), options);
        chart.render();
    </script>

    <script>
        var options = {
            series: [{{ $candidateCount }}, {{ $employerCount }}],
            labels: ['Candidate', 'Employer'],
            chart: {
                type: 'donut',
            },
            colors: ['#6993FF', '#FFC107'],
        };

        var chart = new ApexCharts(document.querySelector("#chart_donut"), options);
        chart.render();
    </script>

    <script>
        var element = document.getElementById('chart');

        var height = 410;
        var labelColor = '#6C757D';
        var borderColor = '#E4E6EF';
        var baseColor = '#6993FF';
        var secondaryColor = '#CED4DC';

        var options = {
            series: [{
                name: 'Candidate',
                data: @json(array_column($chartData, 'Candidate'))
            }, {
                name: 'Employer',
                data: @json(array_column($chartData, 'Employer'))
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: true
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['10%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: true
            },
            dataLabels: {
                enabled: true
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: @json(array_column($chartData, 'MonthYear')),
                axisBorder: {
                    show: true,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
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
            fill: {
                opacity: 1
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
                        return val + ' users'
                    }
                }
            },
            colors: [baseColor, secondaryColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    </script>
@endpush
