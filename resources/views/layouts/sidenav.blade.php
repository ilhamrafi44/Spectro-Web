<!--begin::Header secondary-->
<div class="app-header-secondary">
    <!--begin::Header secondary container-->
    <div class="app-container container-xxl d-flex align-items-stretch">
        <!--begin::Menu wrapper-->
        <div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1" data-kt-drawer="true"
            data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
            <!--begin::Menu-->
            <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                id="kt_app_header_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div class="menu-item menu-lg me-0 me-lg-2">

                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin_home') }}">
                        <span class="menu-title">Dashboard</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>

                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">User</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">

                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.list.user') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List User</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.add.user') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create User</span>
                            </a>
                        </div>

                        {{-- <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link active" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create</span>
                            </a>
                            <!--end:Menu link-->
                        </div> --}}
                    </div>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Jobs</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">

                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Job</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Job Category</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create Job</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create Job Category</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Industry</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">

                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Industry</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create Industry</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Application</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">

                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">List Application</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create Application</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Application Settings</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item menu-lg me-0 me-lg-2">
                    <a class="menu-link" href="../dist/pages/about.html">
                        <span class="menu-title">Messages</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                    class="menu-item menu-lg me-0 me-lg-2">
                    <a class="menu-link" href="../dist/pages/about.html">
                        <span class="menu-title">Report</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </a>
                </div>


                <!--end:Menu item-->
                <!--begin:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
        <!--begin::Search-->
        <div class="d-flex align-items-center w-100 w-lg-225px pt-5 pt-lg-0">
            <div class="w-100 position-relative mb-5 mb-lg-0">
                <a href="" class="btn btn-primary text-white">Belajar Di Arka</a>
            </div>
        </div>
        <!--end::Search-->
    </div>
    <!--end::Header secondary container-->
</div>
<!--end::Header secondary-->
</div>
<!--end::Header-->
