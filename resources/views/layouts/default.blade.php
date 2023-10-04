@include('layouts.metahead')

@include('layouts.navbar')
@include('layouts.sidenav')

<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">




    <!--begin::Wrapper container-->
    <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">



        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                @include('layouts.headbar')

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  pb-0 ">
                    @yield('content')
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->


            <!--begin::Footer-->
            <div id="kt_app_footer"
                class="app-footer  align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6 ">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023 ©</span>
                    <a href="#" class="text-gray-800 text-hover-primary">Spectro.id</a>
                </div>
                <!--end::Copyright-->

                <!--begin::Menu-->
                {{-- <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                            class="menu-link px-2">About</a>
                    </li>

                    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                            class="menu-link px-2">Support</a>
                    </li>

                    <li class="menu-item"><a href="https://keenthemes.com/products/oswald-html-pro" target="_blank"
                            class="menu-link px-2">Purchase</a></li>
                </ul> --}}
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->


    </div>
    <!--end::Wrapper container-->
</div>

<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>


<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('assets/js/custom/custom.js') }}"></script>
<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
<!--end::Global Javascript Bundle-->

</body>

</html>
