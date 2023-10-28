@extends('layouts.default')

@section('content')
    <!-- 4-blocks row start -->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10 dashboard-header">
        <div class="col-lg-3 col-md-6">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bold">{{ number_format($user) }}</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Total User</div>
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
                    <div class="fs-2hx fw-bold">{{ number_format($job) }}</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Total Pekerjaan</div>
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
                    <div class="fs-2hx fw-bold">{{ number_format($profile_views) }}</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Total Pengunjung Profile</div>
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
                    <div class="fs-2hx fw-bold">{{ number_format($job_views) }}</div>
                    <div class="fs-4 fw-semibold text-gray-400 mb-7">Total Pengunjung Pekerjaan</div>
                    <!--end::Heading-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->
    <!--begin::Row-->
    <!--end::Row-->
@endsection
