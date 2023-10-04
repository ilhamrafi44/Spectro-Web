@extends('layouts.default')

@section('content')
    <!-- 4-blocks row start -->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10 dashboard-header">
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">4500</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Dilihat | Total Profil</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">37,500</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Ulasan | Total Profil</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">30,780</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Pekerjaan Disimpan | Pekerjaan</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">30,780</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Pekerjaan Dilamat | Pekerjaan</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">

            <!--begin::Chart Widget 35-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-6">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Currency-->
                            <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                            <!--end::Currency-->

                            <!--begin::Value-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                            <!--end::Value-->

                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                                        class="path2"></span></i>
                                9.2%
                            </span>
                            <!--end::Label-->
                        </div>
                        <!--end::Statistics-->

                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
                        <!--end::Description-->
                    </h3>
                    <!--end::Title-->

                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </button>


                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                </div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Ticket
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Customer
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Admin Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Staff Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Member Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                        Generate Reports
                                    </a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->

                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body py-0 px-0">
                    <!--begin::Nav-->
                    <ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_1"
                                href="#kt_charts_widget_35_tab_content_1" aria-selected="true" role="tab">

                                1d
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_2"
                                href="#kt_charts_widget_35_tab_content_2" aria-selected="false" tabindex="-1"
                                role="tab">

                                5d
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_3"
                                href="#kt_charts_widget_35_tab_content_3" aria-selected="false" tabindex="-1"
                                role="tab">

                                1m
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_4"
                                href="#kt_charts_widget_35_tab_content_4" aria-selected="false" tabindex="-1"
                                role="tab">

                                6m
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_5"
                                href="#kt_charts_widget_35_tab_content_5" aria-selected="false" tabindex="-1"
                                role="tab">

                                1y
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Nav-->

                    <!--begin::Tab Content-->
                    <div class="tab-content mt-n6">


                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1" role="tabpanel"
                            aria-labelledby="kt_charts_widget_35_tab_1">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary"
                                class="min-h-auto h-200px ps-3 pe-6" style="min-height: 215px;">
                                <div id="apexchartsxnbi834o"
                                    class="apexcharts-canvas apexchartsxnbi834o apexcharts-theme-light"
                                    style="width: 368.75px; height: 200px;"><svg id="SvgjsSvg1869" width="368.75"
                                        height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="368.75" height="200">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                style="max-height: 100px;"></div>
                                        </foreignObject>
                                        <rect id="SvgjsRect1896" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                        <g id="SvgjsG1917" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-8, 0)">
                                            <g id="SvgjsG1918" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG1871" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(22, 30)">
                                            <defs id="SvgjsDefs1870">
                                                <clipPath id="gridRectMaskxnbi834o">
                                                    <rect id="SvgjsRect1873" width="343.75" height="158"
                                                        x="-3.5" y="-1.5" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskxnbi834o"></clipPath>
                                                <clipPath id="nonForecastMaskxnbi834o"></clipPath>
                                                <clipPath id="gridRectMarkerMaskxnbi834o">
                                                    <rect id="SvgjsRect1874" width="340.75" height="159"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1879" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1880" stop-opacity="0.4"
                                                        stop-color="rgba(0,178,255,0.4)" offset="0.15"></stop>
                                                    <stop id="SvgjsStop1881" stop-opacity="0.2"
                                                        stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                                    <stop id="SvgjsStop1882" stop-opacity="0.2"
                                                        stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="SvgjsG1885" class="apexcharts-grid">
                                                <g id="SvgjsG1886" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1890" x1="0" y1="38.75"
                                                        x2="336.75" y2="38.75" stroke="#dbdfe9"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1891" x1="0" y1="77.5"
                                                        x2="336.75" y2="77.5" stroke="#dbdfe9"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1892" x1="0" y1="116.25"
                                                        x2="336.75" y2="116.25" stroke="#dbdfe9"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1887" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1895" x1="0" y1="155" x2="336.75"
                                                    y2="155" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1894" x1="0" y1="1" x2="0"
                                                    y2="155" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1888" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1889" x1="0" y1="0" x2="336.75"
                                                    y2="0" stroke="#dbdfe9" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1893" x1="0" y1="155" x2="336.75"
                                                    y2="155" stroke="#dbdfe9" stroke-dasharray="3"
                                                    stroke-linecap="butt" class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1875" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1876" class="apexcharts-series" seriesName="Earnings"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1883"
                                                        d="M 0 155 L 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75C 336.75 38.75 336.75 38.75 336.75 155M 336.75 38.75z"
                                                        fill="url(#SvgjsLinearGradient1879)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskxnbi834o)"
                                                        pathTo="M 0 155 L 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75C 336.75 38.75 336.75 38.75 336.75 155M 336.75 38.75z"
                                                        pathFrom="M -1 206.66666666666666 L -1 206.66666666666666 L 24.053571428571427 206.66666666666666 L 48.107142857142854 206.66666666666666 L 72.16071428571428 206.66666666666666 L 96.21428571428571 206.66666666666666 L 120.26785714285714 206.66666666666666 L 144.32142857142856 206.66666666666666 L 168.375 206.66666666666666 L 192.42857142857142 206.66666666666666 L 216.48214285714286 206.66666666666666 L 240.53571428571428 206.66666666666666 L 264.5892857142857 206.66666666666666 L 288.6428571428571 206.66666666666666 L 312.69642857142856 206.66666666666666 L 336.75 206.66666666666666">
                                                    </path>
                                                    <path id="SvgjsPath1884"
                                                        d="M 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75"
                                                        fill="none" fill-opacity="1" stroke="#00b2ff"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskxnbi834o)"
                                                        pathTo="M 0 98.16666666666666C 8.41875 98.16666666666666 15.634821428571428 46.5 24.053571428571427 46.5C 32.472321428571426 46.5 39.68839285714286 46.5 48.107142857142854 46.5C 56.52589285714285 46.5 63.74196428571428 82.66666666666666 72.16071428571428 82.66666666666666C 80.57946428571428 82.66666666666666 87.7955357142857 82.66666666666666 96.21428571428571 82.66666666666666C 104.63303571428571 82.66666666666666 111.84910714285714 113.66666666666666 120.26785714285714 113.66666666666666C 128.68660714285713 113.66666666666666 135.90267857142857 113.66666666666666 144.32142857142856 113.66666666666666C 152.74017857142857 113.66666666666666 159.95624999999998 82.66666666666666 168.375 82.66666666666666C 176.79375 82.66666666666666 184.00982142857143 82.66666666666666 192.42857142857142 82.66666666666666C 200.84732142857143 82.66666666666666 208.06339285714284 41.33333333333334 216.48214285714286 41.33333333333334C 224.90089285714285 41.33333333333334 232.1169642857143 41.33333333333334 240.53571428571428 41.33333333333334C 248.9544642857143 41.33333333333334 256.17053571428573 62 264.5892857142857 62C 273.0080357142857 62 280.2241071428571 62 288.6428571428571 62C 297.0616071428571 62 304.27767857142857 38.75 312.69642857142856 38.75C 321.11517857142854 38.75 328.33125 38.75 336.75 38.75"
                                                        pathFrom="M -1 206.66666666666666 L -1 206.66666666666666 L 24.053571428571427 206.66666666666666 L 48.107142857142854 206.66666666666666 L 72.16071428571428 206.66666666666666 L 96.21428571428571 206.66666666666666 L 120.26785714285714 206.66666666666666 L 144.32142857142856 206.66666666666666 L 168.375 206.66666666666666 L 192.42857142857142 206.66666666666666 L 216.48214285714286 206.66666666666666 L 240.53571428571428 206.66666666666666 L 264.5892857142857 206.66666666666666 L 288.6428571428571 206.66666666666666 L 312.69642857142856 206.66666666666666 L 336.75 206.66666666666666"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1877"
                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1922" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker whzfo7mgy no-pointer-events"
                                                                stroke="#00b2ff" fill="#00b2ff" fill-opacity="1"
                                                                stroke-width="3" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1878" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1897" x1="0" y1="0" x2="0"
                                                y2="155" stroke="#00b2ff" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                y="0" width="1" height="155" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <line id="SvgjsLine1898" x1="0" y1="0" x2="336.75"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1899" x1="0" y1="0" x2="336.75"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1900" class="apexcharts-xaxis" transform="translate(20, 0)">
                                                <g id="SvgjsG1901" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1919" class="apexcharts-yaxis-annotations">
                                            </g>
                                            <g id="SvgjsG1920" class="apexcharts-xaxis-annotations">
                                            </g>
                                            <g id="SvgjsG1921" class="apexcharts-point-annotations">
                                            </g>
                                            <rect id="SvgjsRect1923" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1924" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 178, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: inherit; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span>
                                                </div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: inherit; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Chart-->

                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->


                        <!--begin::Tap pane-->
                        <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_2" role="tabpanel"
                            aria-labelledby="kt_charts_widget_35_tab_2">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary"
                                class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->

                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+134.02</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+144.04</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->


                        <!--begin::Tap pane-->
                        <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_3" role="tabpanel"
                            aria-labelledby="kt_charts_widget_35_tab_3">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary"
                                class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->

                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+185.03</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">-154.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->


                        <!--begin::Tap pane-->
                        <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_4" role="tabpanel"
                            aria-labelledby="kt_charts_widget_35_tab_4">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary"
                                class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->

                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+124.03</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+144.65</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+154.06</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->


                        <!--begin::Tap pane-->
                        <div class="tab-pane fade " id="kt_charts_widget_35_tab_content_5" role="tabpanel"
                            aria-labelledby="kt_charts_widget_35_tab_5">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary"
                                class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->

                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+114.03</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                            </td>

                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+165.86</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->

                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart Widget 35-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xl-8">

            <!--begin::Table widget 14-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Projects Stats</span>

                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                    </h3>
                    <!--end::Title-->

                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light">History</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                    <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                    <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                    <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                    <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/oswald-html-free/assets/media/stock/600x600/img-49.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy
                                                    App</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jane
                                                    Cooper</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            9.2%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                            Process</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="success" style="min-height: 50px;">
                                            <div id="apexchartsk1sgpn6k"
                                                class="apexcharts-canvas apexchartsk1sgpn6k apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2049"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25"
                                                        height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2097" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)">
                                                    </g>
                                                    <g id="SvgjsG2051" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2050">
                                                            <clipPath id="gridRectMaskk1sgpn6k">
                                                                <rect id="SvgjsRect2054" width="98.25" height="52"
                                                                    x="-3" y="-1" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskk1sgpn6k">
                                                            </clipPath>
                                                            <clipPath id="nonForecastMaskk1sgpn6k">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskk1sgpn6k">
                                                                <rect id="SvgjsRect2055" width="96.25" height="54"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2062" class="apexcharts-grid">
                                                            <g id="SvgjsG2063" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2066" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2067" x1="0" y1="5"
                                                                    x2="92.25" y2="5" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2068" x1="0" y1="10"
                                                                    x2="92.25" y2="10" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2069" x1="0" y1="15"
                                                                    x2="92.25" y2="15" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2070" x1="0" y1="20"
                                                                    x2="92.25" y2="20" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2071" x1="0" y1="25"
                                                                    x2="92.25" y2="25" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2072" x1="0" y1="30"
                                                                    x2="92.25" y2="30" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2073" x1="0" y1="35"
                                                                    x2="92.25" y2="35" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2074" x1="0" y1="40"
                                                                    x2="92.25" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2075" x1="0" y1="45"
                                                                    x2="92.25" y2="45" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2076" x1="0" y1="50"
                                                                    x2="92.25" y2="50" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2064" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2078" x1="0" y1="50"
                                                                x2="92.25" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2077" x1="0" y1="1"
                                                                x2="0" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2065" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2056"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2057" class="apexcharts-series"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2060"
                                                                    d="M 0 50 L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskk1sgpn6k)"
                                                                    pathTo="M 0 50 L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50">
                                                                </path>
                                                                <path id="SvgjsPath2061"
                                                                    d="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664"
                                                                    fill="none" fill-opacity="1" stroke="#50cd89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskk1sgpn6k)"
                                                                    pathTo="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2058"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2059" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2079" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2080" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g id="SvgjsG2081" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2082" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2098" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2099" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2100" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/oswald-html-free/assets/media/stock/600x600/img-40.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Esther
                                                    Howard</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            0.4%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">On
                                            Hold</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="danger" style="min-height: 50px;">
                                            <div id="apexcharts7h5vemlo"
                                                class="apexcharts-canvas apexcharts7h5vemlo apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2101"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25"
                                                        height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2149" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)">
                                                    </g>
                                                    <g id="SvgjsG2103" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2102">
                                                            <clipPath id="gridRectMask7h5vemlo">
                                                                <rect id="SvgjsRect2106" width="98.25" height="52"
                                                                    x="-3" y="-1" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask7h5vemlo">
                                                            </clipPath>
                                                            <clipPath id="nonForecastMask7h5vemlo">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask7h5vemlo">
                                                                <rect id="SvgjsRect2107" width="96.25" height="54"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2114" class="apexcharts-grid">
                                                            <g id="SvgjsG2115" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2118" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2119" x1="0" y1="5"
                                                                    x2="92.25" y2="5" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2120" x1="0" y1="10"
                                                                    x2="92.25" y2="10" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2121" x1="0" y1="15"
                                                                    x2="92.25" y2="15" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2122" x1="0" y1="20"
                                                                    x2="92.25" y2="20" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2123" x1="0" y1="25"
                                                                    x2="92.25" y2="25" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2124" x1="0" y1="30"
                                                                    x2="92.25" y2="30" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2125" x1="0" y1="35"
                                                                    x2="92.25" y2="35" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2126" x1="0" y1="40"
                                                                    x2="92.25" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2127" x1="0" y1="45"
                                                                    x2="92.25" y2="45" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2128" x1="0" y1="50"
                                                                    x2="92.25" y2="50" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g id="SvgjsG2116" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2130" x1="0" y1="50"
                                                                x2="92.25" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2129" x1="0" y1="1"
                                                                x2="0" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2117" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2108"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2109" class="apexcharts-series"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2112"
                                                                    d="M 0 50 L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask7h5vemlo)"
                                                                    pathTo="M 0 50 L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50">
                                                                </path>
                                                                <path id="SvgjsPath2113"
                                                                    d="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664"
                                                                    fill="none" fill-opacity="1" stroke="#f1416c"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask7h5vemlo)"
                                                                    pathTo="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2110"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2111" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2131" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2132" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g id="SvgjsG2133" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2134" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2150" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2151" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2152" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/oswald-html-free/assets/media/stock/600x600/img-39.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto
                                                    CRM</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jenny
                                                    Wilson</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            9.2%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                            Process</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="success" style="min-height: 50px;">
                                            <div id="apexcharts87qo9tex"
                                                class="apexcharts-canvas apexcharts87qo9tex apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2153"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25"
                                                        height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2201" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2155" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2154">
                                                            <clipPath id="gridRectMask87qo9tex">
                                                                <rect id="SvgjsRect2158" width="98.25" height="52"
                                                                    x="-3" y="-1" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask87qo9tex">
                                                            </clipPath>
                                                            <clipPath id="nonForecastMask87qo9tex">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask87qo9tex">
                                                                <rect id="SvgjsRect2159" width="96.25" height="54"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2166" class="apexcharts-grid">
                                                            <g id="SvgjsG2167" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2170" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2171" x1="0" y1="5"
                                                                    x2="92.25" y2="5" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2172" x1="0" y1="10"
                                                                    x2="92.25" y2="10" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2173" x1="0" y1="15"
                                                                    x2="92.25" y2="15" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2174" x1="0" y1="20"
                                                                    x2="92.25" y2="20" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2175" x1="0" y1="25"
                                                                    x2="92.25" y2="25" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2176" x1="0" y1="30"
                                                                    x2="92.25" y2="30" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2177" x1="0" y1="35"
                                                                    x2="92.25" y2="35" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2178" x1="0" y1="40"
                                                                    x2="92.25" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2179" x1="0" y1="45"
                                                                    x2="92.25" y2="45" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2180" x1="0" y1="50"
                                                                    x2="92.25" y2="50" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g id="SvgjsG2168" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2182" x1="0" y1="50"
                                                                x2="92.25" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2181" x1="0" y1="1"
                                                                x2="0" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2169" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2160"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2161" class="apexcharts-series"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2164"
                                                                    d="M 0 50 L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask87qo9tex)"
                                                                    pathTo="M 0 50 L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50">
                                                                </path>
                                                                <path id="SvgjsPath2165"
                                                                    d="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664"
                                                                    fill="none" fill-opacity="1" stroke="#50cd89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask87qo9tex)"
                                                                    pathTo="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2162"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2163" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2183" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2184" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g id="SvgjsG2185" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2186" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2202" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2203" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2204" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/oswald-html-free/assets/media/stock/600x600/img-47.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower
                                                    Hill</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Cody
                                                    Fisher</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            9.2%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="success" style="min-height: 50px;">
                                            <div id="apexchartsgrjig8tr"
                                                class="apexcharts-canvas apexchartsgrjig8tr apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2205"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25"
                                                        height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2253" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2207" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2206">
                                                            <clipPath id="gridRectMaskgrjig8tr">
                                                                <rect id="SvgjsRect2210" width="98.25" height="52"
                                                                    x="-3" y="-1" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskgrjig8tr">
                                                            </clipPath>
                                                            <clipPath id="nonForecastMaskgrjig8tr">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskgrjig8tr">
                                                                <rect id="SvgjsRect2211" width="96.25" height="54"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2218" class="apexcharts-grid">
                                                            <g id="SvgjsG2219" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2222" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2223" x1="0" y1="5"
                                                                    x2="92.25" y2="5" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2224" x1="0" y1="10"
                                                                    x2="92.25" y2="10" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2225" x1="0" y1="15"
                                                                    x2="92.25" y2="15" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2226" x1="0" y1="20"
                                                                    x2="92.25" y2="20" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2227" x1="0" y1="25"
                                                                    x2="92.25" y2="25" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2228" x1="0" y1="30"
                                                                    x2="92.25" y2="30" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2229" x1="0" y1="35"
                                                                    x2="92.25" y2="35" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2230" x1="0" y1="40"
                                                                    x2="92.25" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2231" x1="0" y1="45"
                                                                    x2="92.25" y2="45" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2232" x1="0" y1="50"
                                                                    x2="92.25" y2="50" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g id="SvgjsG2220" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2234" x1="0" y1="50"
                                                                x2="92.25" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2233" x1="0" y1="1"
                                                                x2="0" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2221" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2212"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2213" class="apexcharts-series"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2216"
                                                                    d="M 0 50 L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskgrjig8tr)"
                                                                    pathTo="M 0 50 L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50">
                                                                </path>
                                                                <path id="SvgjsPath2217"
                                                                    d="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333"
                                                                    fill="none" fill-opacity="1" stroke="#50cd89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskgrjig8tr)"
                                                                    pathTo="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2214"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2215" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2235" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2236" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g id="SvgjsG2237" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2238" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2254" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2255" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2256" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/oswald-html-free/assets/media/stock/600x600/img-48.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9
                                                    Degree</a>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Savannah
                                                    Nguyen</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            0.4%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                            Process</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="danger" style="min-height: 50px;">
                                            <div id="apexcharts6clv7mh3"
                                                class="apexcharts-canvas apexcharts6clv7mh3 apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2257"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25"
                                                        height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2305" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2259" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs2258">
                                                            <clipPath id="gridRectMask6clv7mh3">
                                                                <rect id="SvgjsRect2262" width="98.25" height="52"
                                                                    x="-3" y="-1" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask6clv7mh3">
                                                            </clipPath>
                                                            <clipPath id="nonForecastMask6clv7mh3">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask6clv7mh3">
                                                                <rect id="SvgjsRect2263" width="96.25" height="54"
                                                                    x="-2" y="-2" rx="0"
                                                                    ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2270" class="apexcharts-grid">
                                                            <g id="SvgjsG2271" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2274" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2275" x1="0" y1="5"
                                                                    x2="92.25" y2="5" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2276" x1="0" y1="10"
                                                                    x2="92.25" y2="10" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2277" x1="0" y1="15"
                                                                    x2="92.25" y2="15" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2278" x1="0" y1="20"
                                                                    x2="92.25" y2="20" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2279" x1="0" y1="25"
                                                                    x2="92.25" y2="25" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2280" x1="0" y1="30"
                                                                    x2="92.25" y2="30" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2281" x1="0" y1="35"
                                                                    x2="92.25" y2="35" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2282" x1="0" y1="40"
                                                                    x2="92.25" y2="40" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2283" x1="0" y1="45"
                                                                    x2="92.25" y2="45" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                                <line id="SvgjsLine2284" x1="0" y1="50"
                                                                    x2="92.25" y2="50" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline">
                                                                </line>
                                                            </g>
                                                            <g id="SvgjsG2272" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2286" x1="0" y1="50"
                                                                x2="92.25" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2285" x1="0" y1="1"
                                                                x2="0" y2="50" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2273" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2264"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2265" class="apexcharts-series"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2268"
                                                                    d="M 0 50 L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask6clv7mh3)"
                                                                    pathTo="M 0 50 L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50">
                                                                </path>
                                                                <path id="SvgjsPath2269"
                                                                    d="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5"
                                                                    fill="none" fill-opacity="1" stroke="#f1416c"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask6clv7mh3)"
                                                                    pathTo="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5"
                                                                    pathFrom="M -1 50 L -1 50 L 7.096153846153847 50 L 14.192307692307693 50 L 21.28846153846154 50 L 28.384615384615387 50 L 35.48076923076923 50 L 42.57692307692308 50 L 49.67307692307693 50 L 56.769230769230774 50 L 63.86538461538462 50 L 70.96153846153847 50 L 78.0576923076923 50 L 85.15384615384616 50 L 92.25 50"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2266"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2267" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2287" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2288" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden">
                                                        </line>
                                                        <g id="SvgjsG2289" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2290" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2306" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2307" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2308" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Table widget 14-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
@endsection
