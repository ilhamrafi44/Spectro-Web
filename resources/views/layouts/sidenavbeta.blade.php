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

                @if (Auth::user())
                    <div class="menu-item menu-lg me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('home') }}">
                            <span class="menu-title">Dashboard</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                    </div>
                    @if (Auth::user()->role == '3')
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                            <span class="menu-link">
                                <span class="menu-title">User</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
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
                                {{--
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link active" href="../dist/pages/faq.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Create</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                --}}
                            </div>
                        </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                            <span class="menu-link">
                                <span class="menu-title">Jobs</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.jobs') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">List Job</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.jobs.add') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Create Job</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                            <span class="menu-link">
                                <span class="menu-title">Jobs Master</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.jobs.category') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Master Jobs Category</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.jobs.industry') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Master Jobs Industry</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.master.jobs.type') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Master Jobs Type</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.master.jobs.experience') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Master Jobs Experience</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.master.jobs.qualification') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Master Jobs Qualification</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.master.jobs.career') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Master Jobs Career Level</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item menu-lg me-0 me-lg-2">
                            <a class="menu-link" href="{{ route('admin.app') }}">
                                <span class="menu-title">Application</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </a>
                        </div>
                        <div class="menu-item menu-lg me-0 me-lg-2">
                            <a class="menu-link" href="{{ route('admin.ssw.index') }}">
                                <span class="menu-title">Ssw Flow</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </a>
                        </div>
                        <div class="menu-item menu-lg me-0 me-lg-2">
                            <a class="menu-link" href="{{ route('conversations.admin') }}">
                                <span class="menu-title">Chat Monitoring</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </a>
                        </div>
                        <div class="menu-item menu-lg me-0 me-lg-2">
                            <a class="menu-link" href="{{ route('admin.contact.index') }}">
                                <span class="menu-title">List Contact</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                            data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
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
                                        <span class="menu-title">Client</span>
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
                                <span class="menu-title">Candidate Tersimpan</span>
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
                                <span class="menu-title">Tersimpan</span>
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
                                        <span class="menu-title">Perusahaan Disimpan</span>
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
                <!--end:Menu item-->
                <!--begin:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
        <!--begin::Search-->
        <div class="d-flex w-100 w-lg-225px pt-5 pt-lg-0">
            <div class="w-100 position-relative mb-5 mb-lg-0 mt-md-4">
                <div class="gtranslate_wrapper" style="position: relative;
                z-index: 0;"></div>
                <script>
                    window.gtranslateSettings = {
                        "default_language": "id",
                        "detect_browser_language": true,
                        "languages": ["en", "id", "ja"],
                        "wrapper_selector": ".gtranslate_wrapper",
                        "flag_size": 24,
                        "switcher_horizontal_position": "inline",
                        "switcher_text_color": "#f7f7f7",
                        "switcher_arrow_color": "#f2f2f2",
                        "switcher_border_color": "#b22222",
                        "switcher_background_color": "#b22222",
                        "switcher_background_shadow_color": "#b22222",
                        "switcher_background_hover_color": "#ee4747",
                        "dropdown_text_color": "#eaeaea",
                        "dropdown_hover_color": "#b22222",
                        "dropdown_background_color": "#ee4747"
                    }
                </script>
                <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
            </div>
        </div>
        <!--end::Search-->
    </div>
    <!--end::Header secondary container-->
</div>
<!--end::Header secondary-->
</div>
<!--end::Header-->
