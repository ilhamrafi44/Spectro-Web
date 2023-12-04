<!--begin::Body-->
<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
    data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default"
    data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on">
    <div class="page-loader flex-column bg-dark bg-opacity-25">
        <span class="spinner-border text-primary" role="status"></span>
        <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
    </div>
    <!-- Konfigurasi tema saat halaman dimuat -->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!-- Selesai Konfigurasi tema saat halaman dimuat -->
    <!-- Memulai Aplikasi -->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!-- Mulai Halaman -->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!-- Mulai Header -->
            <div id="kt_app_header" class="app-header">
                <!-- Mulai Header Utama -->
                <div class="app-header-primary shadow-lg" data-kt-sticky="true"
                    data-kt-sticky-name="app-header-primary-sticky"
                    data-kt-sticky-offset="{default: 'false', lg: '300px'}">
                    <!-- Mulai Kontainer Header Utama -->
                    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
                        <!-- Logo dan pencarian -->
                        <div class="d-flex flex-grow-1 flex-lg-grow-0">
                            <!-- Pembungkus Logo -->
                            <div class="d-flex align-items-center" id="kt_app_header_logo_wrapper">
                                <!-- Tombol Toggle Header -->
                                <button
                                    class="d-lg-none btn btn-icon btn-color-danger btn-active-color-dark ms-n4 me-sm-2"
                                    id="kt_app_header_menu_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!-- Selesai Tombol Toggle Header -->
                                <!-- Logo -->
                                <a href="{{ route('home') }}" class="d-flex align-items-center mb-1 mb-lg-0 pt-lg-1">
                                    <img alt="Logo" src="{{ asset('assets/media/spectro-small.png') }}"
                                        class="d-block d-sm-none" height="30px" />
                                    <img alt="Logo" src="{{ asset('assets/media/spectro.png') }}"
                                        class="d-none d-sm-block" height="40px" />
                                </a>
                                <!-- Selesai Logo -->
                            </div>
                            <!-- Selesai Pembungkus Logo -->
                        </div>
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1"
                            data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                            data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!-- Menu -->
                            <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                                id="kt_app_header_menu" data-kt-menu="true">
                                <!-- Item Menu -->

                                @if (Auth::user())
                                    <div class="menu-item menu-lg me-0 me-lg-2">
                                        <!-- Tautan Menu -->
                                        <a class="menu-link" href="{{ route('home') }}">
                                            <span class="menu-title">Dasbor</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>
                                    </div>
                                    @if (Auth::user()->role == '3')
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <span class="menu-link">
                                                <span class="menu-title">Pengguna</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.list.user') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Daftar Pengguna</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.add.user') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Tambah Pengguna</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <span class="menu-link">
                                                <span class="menu-title">Master Pekerjaan</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                <div class="menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!-- Tautan Menu -->


                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="{{ route('admin.jobs') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Daftar Pekerjaan</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link" href="{{ route('admin.jobs.add') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Buat Pekerjaan</span>
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>
                                                <!--begin::Menu item-->
                                                <div class="menu-item" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <!--begin::Menu link-->
                                                    <a href="#" class="menu-link py-3">

                                                        <span class="menu-title">Jobs Master</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--end::Menu link-->

                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown p-3 w-200px">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('admin.jobs.category') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Master Jobs Category</span>
                                                            </a>
                                                        </div>

                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('admin.jobs.industry') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Master Jobs Industry</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('admin.master.jobs.type') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Master Jobs Type</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('admin.master.jobs.experience') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Master Jobs Experience</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('admin.master.jobs.qualification') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Master Jobs
                                                                    Qualification</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                                href="{{ route('admin.master.jobs.career') }}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">Master Jobs Career
                                                                    Level</span>
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu sub-->
                                                </div>

                                            </div>
                                        </div>
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <span class="menu-link">
                                                <span class="menu-title">Applicant</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.app') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">List Applicant</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.ssw.index') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">List Ssw Flow</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">
                                            <a class="menu-link" href="{{ route('conversations.admin') }}">
                                                <span class="menu-title">Chat List</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <span class="menu-link">
                                                <span class="menu-title">Konfigurasi</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.web') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Website</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.news') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">News</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.web.testimonial') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Testimonials</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.web.client') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">List Client</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('admin.contact.index') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">List Contact Us</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">
                                            <a class="menu-link" href="{{ route('blog.index') }}">
                                                <span class="menu-title">Blog</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                    @endif
                                    @if (Auth::user()->role == '2')
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <span class="menu-link">
                                                <span class="menu-title">Jobs</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('employer.jobs') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">List Job</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('employer.jobs.add') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Create Job</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">

                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('employer.app') }}">
                                                <span class="menu-title">Application</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">

                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('employer.following.saved') }}">
                                                <span class="menu-title">Candidate Diikuti</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">

                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('candidate.list') }}">
                                                <span class="menu-title">Cari Candidate</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">

                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('employer.ssw.index') }}">
                                                <span class="menu-title">SSW Flow</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                    @endif
                                    @if (Auth::user()->role == '1')
                                        <div class="menu-item menu-lg me-0 me-lg-2">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('job.index') }}">
                                                <span class="menu-title">Cari Kerja</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('user.resume') }}">
                                                <span class="menu-title">Resume Saya</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('jobs.index') }}">
                                                <span class="menu-title">Lamaran Saya</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div class="menu-item menu-lg me-0 me-lg-2">

                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('employer.list') }}">
                                                <span class="menu-title">Cari Employer</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                            <span class="menu-link">
                                                <span class="menu-title">Tersimpan/Diikuti</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('jobs.saved') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Pekerjaan Disimpan</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{ route('following.saved') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Perusahaan Diikuti</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item menu-lg me-0 me-lg-2">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="{{ route('ssw.index') }}">
                                                <span class="menu-title">SSW Flow</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>

                                        </div>
                                    @endif
                                @else
                                    <div class="menu-item menu-lg me-0 me-lg-2">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="{{ route('home') }}">
                                            <span class="menu-title">Home</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>
                                    </div>
                                    <div class="menu-item menu-lg me-0 me-lg-2">

                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="{{ route('job.index') }}">
                                            <span class="menu-title">Cari Kerja</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>

                                    </div>
                                    <div class="menu-item menu-lg me-0 me-lg-2">

                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="{{ route('page.about') }}">
                                            <span class="menu-title">About</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>

                                    </div>
                                    <div class="menu-item menu-lg me-0 me-lg-2">

                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="{{ route('blog.index') }}">
                                            <span class="menu-title">Blog</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>

                                    </div>
                                    <div class="menu-item menu-lg me-0 me-lg-2">

                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="{{ route('page.contact') }}">
                                            <span class="menu-title">Contact US</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>

                                    </div>
                                @endif
                                <div class="menu-item menu-lg me-0 me-lg-2">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://arkalearn.com/" target="_blank">
                                        <span class="menu-title">Belajar di Arka</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </a>

                                </div>
                                <style>
                                    .gt_option {
                                        padding-top: 7px;
                                    }
                                </style>
                                <div class="menu-item menu-lg me-0 me-lg-2 d-flex align-items-start mt-5">
                                    <!--begin:Menu link-->
                                    <div class="gtranslate_wrapper menu-link"
                                        style="position: relative;
                                        z-index: 0;">
                                        <script>
                                            window.gtranslateSettings = {
                                                "default_language": "id",
                                                "native_language_names": true,
                                                "detect_browser_language":true,
                                                "languages": ["id", "ja", "en"],
                                                "wrapper_selector": ".gtranslate_wrapper",
                                                "flag_size": 22,
                                                "switcher_horizontal_position": "inline",
                                                "switcher_text_color": "grey",
                                                "switcher_arrow_color": "grey",
                                                "switcher_border_color": "white",
                                                "switcher_background_color": "white",
                                                "switcher_background_shadow_color": "white",
                                                "switcher_background_hover_color": "white",
                                                "dropdown_text_color": "grey    ",
                                                "dropdown_hover_color": "white",
                                                "dropdown_background_color": "white"
                                            }
                                        </script>
                                        <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>

                                    </div>
                                </div>

                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Logo and search-->
                        <!--begin::Navbar-->
                        <div class="app-navbar">
                            <!--begin::Notifications-->
                            <div class="app-navbar-item ms-1">
                                @if (Auth::user())
                                    <!--begin::Menu- wrapper-->
                                    <div class="btn btn-icon btn-color-danger btn-active-color-dark"
                                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-graph-3 fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                        data-kt-menu="true" id="kt_menu_notifications">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top bg-spectro">
                                            <!--begin::Title-->
                                            @php
                                                $notif_private = \App\Models\PrivateNotification::where('to_id', Auth::user()->id)
                                                    ->orderby('created_at', 'desc')
                                                    ->limit(5)
                                                    ->get();
                                            @endphp
                                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul
                                                class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 show active opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_1">Private</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade show active" id="kt_topbar_notifications_1"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->

                                                    @foreach ($notif_private as $notif)
                                                        <div class="d-flex flex-stack py-4">
                                                            <!--begin::Section-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Symbol-->

                                                                <!--end::Symbol-->
                                                                <!--begin::Title-->
                                                                <div class="mb-0 me-2">
                                                                    <a
                                                                        class="fs-6 text-gray-800 text-hover-primary fw-bold">{{ $notif->subject }}</a>
                                                                    <div class="text-gray-400 fs-7">
                                                                        {{ $notif->message }}
                                                                    </div>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Label-->
                                                            <span
                                                                class="badge badge-light fs-8">{{ \Carbon\Carbon::parse($notif->created_at)->toFormattedDateString() }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    @endforeach
                                                    @if ($notif_private->count() == 0)
                                                        @include('layouts.data404')
                                                    @endif
                                                    <!--end::Item-->
                                                </div>
                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a href="#"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">View
                                                        All
                                                        <i class="ki-duotone ki-arrow-right fs-5">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i></a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_3"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
                                                                order</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Just now</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->

                                                </div>
                                                <!--end::Items-->
                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a href="#"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">View
                                                        All
                                                        <i class="ki-duotone ki-arrow-right fs-5">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i></a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::Quick links-->
                            <div class="app-navbar-item ms-1">
                                <!--begin::Menu- wrapper-->
                                <div class="btn btn-icon btn-color-danger btn-active-color-dark"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-notification-status fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </div>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div
                                        class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10 bg-spectro">
                                        <!--begin::Title-->
                                        <h3 class="text-white fw-semibold mb-3">Quick Links</h3>
                                        <!--end::Title-->
                                        <!--begin::Status-->
                                        <!--end::Status-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin:Nav-->
                                    <div class="row g-0">
                                        <!--begin:Item-->

                                        <!--end:Item-->
                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="{{ route('conversations.index') }}"
                                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                                <i class="ki-duotone ki-sms fs-3x text-primary mb-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="fs-5 fw-semibold text-gray-800 mb-0">Private Chat</span>
                                                <span class="fs-7 text-gray-400">Open</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="https://arkalearn.com/"
                                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                                <i class="ki-duotone ki-abstract-41 fs-3x text-primary mb-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="fs-5 fw-semibold text-gray-800 mb-0">Belajar Di
                                                    Arka</span>
                                                <span class="fs-7 text-gray-400">Open</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin:Item-->
                                        <div class="col-6">
                                            <a href="{{ route('job.index') }}"
                                                class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                                <i class="ki-duotone ki-briefcase fs-3x text-primary mb-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="fs-5 fw-semibold text-gray-800 mb-0">Cari Kerja</span>
                                                <span class="fs-7 text-gray-400">Open</span>
                                            </a>
                                        </div>
                                        <!--end:Item-->
                                    </div>
                                    <!--end:Nav-->
                                    <!--begin::View more-->
                                    <!--end::View more-->
                                </div>
                                @endif
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Quick links-->
                            <!--begin::Chat-->
                            {{-- <div class="app-navbar-item ms-1">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon btn-color-danger btn-active-color-dark"
                                    id="kt_drawer_chat_toggle">
                                    <i class="ki-duotone ki-abstract-36 fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Menu wrapper-->
                            </div> --}}
                            <!--end::Chat-->

                            <!--begin::User menu-->
                            @if (Auth::user())

                                <div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol symbol-35px"
                                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">

                                        @if (Auth::user()?->file_profile_id == null)
                                            <img alt="Logo" class="symbol symbol-35px employer-image"
                                                src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" />
                                        @else
                                            <img alt="Logo" class="symbol symbol-35px employer-image"
                                                src="/storage/file/images/profile/{{ Auth::user()->file_profile_id }}" />
                                        @endif
                                    </div>
                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                @if (Auth::user())
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5 ">
                                                        @if (Auth::user()->file_profile_id == null)
                                                            <img alt="Logo"
                                                                src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" />
                                                        @else
                                                            <img alt="Logo"
                                                                src="/storage/file/images/profile/{{ Auth::user()->file_profile_id }}" />
                                                        @endif
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bold d-flex align-items-center fs-5">
                                                            {{ Auth::user()->name }}
                                                            <span
                                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
                                                                {{ Auth::user()->role == '3' ? 'Admin' : '' }}
                                                                {{ Auth::user()->role == '2' ? 'Employeer' : '' }}
                                                                {{ Auth::user()->role == '1' ? 'User' : '' }}</span>
                                                        </div>
                                                        <a href="#"
                                                            class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                                    </div>
                                                    <!--end::Username-->
                                                @endif
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        @if (Auth::user())
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="{{ route('profile') }}" class="menu-link px-5">My
                                                    Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="{{ route('conversations.index') }}"
                                                    class="menu-link px-5">Private Message</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->

                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            {{-- <div class="menu-item px-5"
                                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                            <a href="#" class="menu-link px-5">
                                                <span class="menu-title position-relative">Language
                                                    <span
                                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                        <img class="w-15px h-15px rounded-1 ms-2"
                                                            src="assets/media/flags/united-states.svg"
                                                            alt="" /></span></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../dist/account/settings.html"
                                                        class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="assets/media/flags/united-states.svg"
                                                                alt="" />
                                                        </span>English</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../dist/account/settings.html"
                                                        class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="assets/media/flags/japan.svg"
                                                                alt="" />
                                                        </span>Japanese</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="../dist/account/settings.html"
                                                        class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                src="assets/media/flags/indonesia.svg"
                                                                alt="" />
                                                        </span>Indonesia</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div> --}}
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a href="{{ route('reset.index') }}" class="menu-link px-5">Ganti
                                                    Password</a>
                                            </div>
                                            <div class="menu-item px-5 my-1">
                                                <a href="{{ route('hapus.akun') }}" class="menu-link px-5">Hapus
                                                    Akun</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="#" class="menu-link px-5"
                                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                                        class="icon-logout"></i>
                                                    {{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        @else
                                        @endif
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::User account menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                            @else
                                @include('auth.modal')
                            @endif
                            <!--end::User menu-->
                            <!--begin::Primary button-->
                            {{-- <a href="#"
                                class="btn btn-flex btn-center btn-success btn-sm align-self-center p-3 px-lg-4 h-35px"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <i class="ki-duotone ki-plus-square fs-2 p-0 m-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <span class="ms-2 d-none d-lg-block">Invite</span>
                            </a> --}}
                            <!--end::Primary button-->
                            <!--begin::Header menu toggle-->
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header primary container-->
                </div>
                <!--end::Header primary-->
