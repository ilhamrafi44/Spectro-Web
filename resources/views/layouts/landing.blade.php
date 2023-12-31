@include('layouts.metahead')

@include('layouts.navbar')
@include('layouts.sidenav')

<div class="app-wrapper flex-column flex-row-fluid bg-white" id="kt_app_wrapper">
    <!--begin::Wrapper container-->
    <div class="app-container container-xxl d-flex flex-row flex-column-fluid ">
        <!--begin::Main-->

        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                {{-- @include('layouts.headbar') --}}

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content">
                    @yield('content')
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->

        </div>
    </div>

    <!--begin::Footer-->
    <div id="kt_app_footer"
        class="app-footer bg-spectro align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6 px-lg-20">
        <!--begin::Copyright-->
        <div class="text-white ml-10">
            <span class="fw-semibold me-1">2023 ©</span>
            <a href="#" class="text-white text-hover-light">Spectro.id</a>
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-hover-primary fw-semibold order-1">
            <li class="menu-item"><a href="{{ route('page.about') }}" target="_blank"
                    class="menu-link px-2 text-white">About</a>
            </li>

            <li class="menu-item"><a href="{{ route('page.contact') }}" target="_blank"
                    class="menu-link px-2 text-white">Contact Us</a>
            </li>

            <li class="menu-item"><a href="{{ route('blog.index.user') }}" target="_blank"
                    class="menu-link px-2 text-white">Blog</a></li>
        </ul>
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
{{-- <script src="{{ asset('assets/js/custom/custom.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@stack('scripts')

<script>
    $(document).ready(function() {
        $('.loop').owlCarousel({
            center: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 1200,
            autoplayHoverPause: true,
            loop: true,
            margin: 10,
            responsive: {
                600: {
                    items: 4
                }
            }
        });
    });
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
@if (!Auth::user())
    @include('auth.ajax')
@endif
<!--end::Global Javascript Bundle-->

</body>

</html>
