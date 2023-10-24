@include('layouts.metahead')
<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
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
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto bg-spectro w-xl-600px positon-xl-relative">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="/" class="py-2 py-lg-20">
                            <img alt="Logo" src="{{ asset('assets/media/spectro-white.png') }}"
                                class="h-40px h-lg-50px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Temukan job yang
                            sesuai dan
                            hidupkan mimpimu</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">100+ Pekerjaan
                            <br />Yang dapat kamu temukan disini!.
                        </p>
                        <!--end::Description-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Illustration-->
                    <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-450px"
                        style="background-image: url({{ asset('assets/media/spectro-1.png') }})"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                            action="{{ route('login') }}" method="POST">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-7">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Sign In to Spectro.id</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-semibold fs-4">New Here?
                                    <a href="{{ route('register') }}" class="text-spectro link-primary fw-bold">Create
                                        an Account</a>
                                </div>
                                <!--end::Link-->
                            </div>
                            @if ($errors->has('password') || $errors->has('email'))
                            <!--begin::Alert-->
                            <div class="alert alert-danger d-flex align-items-center p-5">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-message-text-2 fs-2hx text-danger me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h4 class="mb-1 text-danger">Gagal</h4>
                                    <!--end::Title-->

                                    <!--begin::Content-->
                                    <span>Email atau Kata sandi salah.</span>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Alert-->
                        @endif
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bold text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    name="email" autocomplete="off" id="email" value="{{ old('email') }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <a href="{{ route('password.request') }}" class="text-spectro fs-6 fw-bold">Forgot
                                        Password ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    name="password" autocomplete="off" id="password" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                            id="remember" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" class="btn btn-lg btn-spectro w-100 mb-5">
                                    <span class="indicator-label">Continue</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>
                                <!--end::Separator-->
                                <!--begin::Google link-->
                                <a href="{{ route('google-auth') }}"
                                    class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                        class="h-20px me-3" />Continue with Google</a>
                                <!--end::Google link-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-semibold fs-6">
                        <a href="/" class="text-muted text-hover-primary px-2" target="_blank">Cari Kerja</a>
                        <a href="/" class="text-muted text-hover-primary px-2" target="_blank">Cari Kandidat</a>
                        <a href="https://arkalearn.com/" class="text-muted text-hover-primary px-2"
                            target="_blank">Belajar Di Arka</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
