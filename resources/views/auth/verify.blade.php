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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pre-Home</title>

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<style>
    .prehome {

        background-color: white;
        min-height: 100vh;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    @media (max-width: 1024px) {
        .prehome {
            background-color: white;
            min-height: 100vh;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>

<body class="" style="background-color: #e8e8e8;">
    <div class="pt-5 prehome" style="">
        <div class="text-center pt-5">
            <h4>Hallo <b>{{ Auth::user()->name }}</b>, Selamat Datang di Spectro.id!</h4>
            <h6>Silahkan verifikasi akun kamu terlebih dahulu dengan klik tombol pada email yang sudah kami kirimkan.</h6>
            <hr>
            <h6>Tidak menerima email?</h6>
            <div class="row justify-content-center p-4">
                <div class="col-md-4 col-8 mb-3">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button class="card card-body text-white" type="submit" style="background-color: #b42424; witdh: 100%;">
                            <h2>
                                <i class="bi-email"></i>
                            </h2>
                            <h4>
                                Kirim Ulang Email
                            </h4>
                        </button>
                    </form>
                </div>
            </div>
            <img src="{{ asset('template/assets/images/logo/spectro.png') }}" alt="" class="pt-5">
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
