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
            <span>@if ($check_complete < 80)
                Presentase kelengkapan data anda adalah {{ $check_complete }}%, Silahkan lengkapi data lebih dari 80% agar bisa melamar pekerjaan
            @endif</span>
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="w-bolder">FAQ </h1>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content wrapper-->
    <!--end::App-->
@endsection
