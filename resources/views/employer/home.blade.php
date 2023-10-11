@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card bg-spectro text-white text-center">
                <div class="card-body">
                    <h1 class="text-white mb-5" style="font-size: 35px;">1.908</h1>
                    <div class="fs-5 bg-white rounded text-spectro p-5 fw-bold">
                        Total Halaman Dilihat
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card bg-spectro text-white text-center">
                <div class="card-body">
                    <h1 class="text-white mb-5" style="font-size: 35px;">5</h1>
                    <div class="fs-5 bg-white rounded text-spectro p-5 fw-bold">
                        Total Pekerjaan Dibuat
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card bg-spectro text-white text-center">
                <div class="card-body">
                    <h1 class="text-white mb-5" style="font-size: 35px;">65</h1>
                    <div class="fs-5 bg-white rounded text-spectro p-5 fw-bold">
                        Total Pelamar
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
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
                                    <td> <a href="" class="btn btn-sm btn-icon btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-warning"><i
                                                class="far fa-solid fa-pen text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15 Oktober 2023</td>
                                    <td>Ilham Rafi</td>
                                    <td>50 Tahun</td>
                                    <td><a href="" class="btn btn-sm btn-icon btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-warning"><i
                                                class="far fa-solid fa-pen text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10 Oktober 2023</td>
                                    <td>Ayii Ramadhan</td>
                                    <td>2 Tahun</td>
                                    <td><a href="" class="btn btn-sm btn-icon btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-warning"><i
                                                class="far fa-solid fa-pen text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-success"><i
                                                class="far fa-solid fa-list-check text-white"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8 Oktober 2023</td>
                                    <td>Hangga Budhi</td>
                                    <td>4 Tahun</td>
                                    <td><a href="" class="btn btn-sm btn-icon btn-danger"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-warning"><i
                                                class="far fa-solid fa-pen text-white"></i></a>
                                        <a href="" class="btn btn-sm btn-icon btn-success"><i
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
                                    </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
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
