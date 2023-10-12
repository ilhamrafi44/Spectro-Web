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
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <h1 class="w-bolder mb-5">
                            Silahkan pilih untuk menentukan akun anda
                        </h1>
                        <div class="row d-flex justify-content-center mb-5">
                            <a href="{{ route('register.candidate') }}" class="btn btn-lg btn-primary m-1 fs-1 col-12 col-md-5">Saya Mencari
                                Kerja</a>
                            <a href="{{ route('register.employer') }}" class="btn btn-lg btn-primary m-1 fs-1 col-12 col-md-5">Saya Memberi
                                Kerja</a>
                        </div>

                        <a href="/login" class="text-primary fs-3 text-center mt-5 p-5">.. Kembali</a>

                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-semibold fs-6">
                        <div class="d-flex flex-center fw-semibold fs-6">
                            <a href="/" class="text-muted text-hover-primary px-2"
                                target="_blank">Cari Kerja</a>
                            <a href="/" class="text-muted text-hover-primary px-2"
                                target="_blank">Cari Kandidat</a>
                            <a href="https://arkalearn.com/"
                                class="text-muted text-hover-primary px-2" target="_blank">Belajar Di Arka</a>
                        </div>
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
    <script src="assets/js/custom/authentication/sign-up/general.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
