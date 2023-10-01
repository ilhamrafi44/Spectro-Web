{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login - Spectro.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="{{ asset('auth/fonts/linearicons/style.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <img src="{{ asset('auth/images/spectro-1.png') }}" alt="" class="image-1">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h3>Reset Password</h3>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                {{-- <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-holder">
                    <span class="lnr lnr-phone-handset"></span>
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div> --}}
                <div class="form-holder">
                    <span class="lnr lnr-envelope"></span>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email"
                        value="{{ old('email') }}">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                {{-- <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div> --}}
                <button style="margin-top: 40px;">
                    <span>Reset Password</span>
                </button>
                <br>
                <hr>
                <br>

                <h4 style="text-align:center; margin-top: 25px;">
                    Tersesat? <a href="{{ route('login') }}" style="color: #b42424;"> <u> Kembali ke Login</u></a>
                </h4>
                {{-- <img src="{{ asset('template/assets/images/logo/spectro.png') }}" alt="Spectro.id"
                    style="width: 100px; margin-top: 50px; display: block;
                        margin-left: auto;
                        margin-right: auto;
                      "> --}}
            </form>
            <img src="{{ asset('auth/images/2.png') }}" alt="" class="image-2">
        </div>

    </div>

    <script src="{{ asset('auth/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
