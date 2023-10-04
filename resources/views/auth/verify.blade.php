{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@include('layouts.metahead')
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Authentication - Signup Verify Email -->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
            <!--begin::Logo-->
            <a href="/oswald-html-pro/index.html" class="pt-lg-20 mb-12">
                <img alt="Logo" src="{{ asset('assets/media/spectro.png') }}"
                    class="theme-light-show h-40px h-lg-50px" />
            </a>
            <!--end::Logo-->


            <!--begin::Logo-->
            <h1 class="fw-bold fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
            <!--end::Logo-->

            <!--begin::Message-->
            <div class="fs-3 fw-semibold text-muted mb-3">
                We have sent an email to <b>{{ Auth::user()->email }}</b>. <br>
                pelase follow a link to verify your email.
                <hr>
            </div>
            <span class="fw-semibold text-gray-700">Did’t receive an email?</span>
            <br>

            <!--end::Message-->

            <!--begin::Action-->
            <div class="text-center mb-10">
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-lg btn-spectro fw-bold">{{ __('Click here to request another') }}</button>.
                </form>
            </div>
            <!--end::Action-->

        </div>
        <!--end::Content-->

        <!--begin::Illustration-->
        {{-- <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-300px min-h-lg-550px"
            style="background-image: url({{ asset('assets/media/spectro-1.png') }})">
        </div> --}}
        <!--end::Illustration-->
    </div>
    <!--end::Authentication - Signup Verify Email-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
<script>
    var hostUrl = "/oswald-html-pro/assets/";
</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="/oswald-html-pro/assets/plugins/global/plugins.bundle.js"></script>
<script src="/oswald-html-pro/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->


<!--end::Javascript-->

</body>
<!--end::Body-->

</html>
