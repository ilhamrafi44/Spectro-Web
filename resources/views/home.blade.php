@extends('layouts.default')
@section('content')
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Wrapper container-->
        <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap">
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex flex-stack flex-wrap gap-4 w-100">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column gap-3 me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">
                                        Page Title</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center gap-3 gap-lg-5">
                                    <!--begin::Secondary button-->
                                    <div class="m-0">
                                        <a href="#"
                                            class="btn btn-flex btn-sm btn-color-gray-700 bg-body fw-bold px-4"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
                                    </div>
                                    <!--end::Secondary button-->
                                    <!--begin::Primary button-->
                                    <a href="#" class="btn btn-flex btn-center btn-dark btn-sm px-4"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Reports</a>
                                    <!--end::Primary button-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->

                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content pb-0">
                        <!--begin::Faq main-->
                        <div class="row">
                            <div class="col-md-8">

                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="w-bolder">FAQ </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--end::Content-->
                <!--begin::Sidebar-->

            </div>
            <!--end::Faq main-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--end::App-->
@endsection
