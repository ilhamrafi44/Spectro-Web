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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Masuk</h3>
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
                <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label for="remember"> Tetap Masuk Selama 30 Hari</label><br>

                {{-- <div class="form-holder">
                    <span class="lnr lnr-lock"></span>
                    <input type="password" class="form-control" placeholder="Confirm Password">
                </div> --}}
                <button style="margin-top: 40px;">
                    <span>Masuk</span>
                </button>
                <h4 style="text-align:center; margin-top: 25px;">
                    Lupa Kata Sandi? <a href="{{ route('password.request') }}" style="color: #b42424;"> <u> Klik Disini</u></a>
                </h4>
                <br>
                <hr>
                <br>
                <a href="{{ route('google-auth') }}">
                    <div class="google-btn" style="margin-left: auto; margin-right: auto;">
                        <div class="google-icon-wrapper">
                            <img class="google-icon" src="{{ asset('auth/images/google.png') }}" />
                        </div>
                        <p class="btn-text"><b>Sign in with google</b></p>
                    </div>
                </a>
                <h4 style="text-align:center; margin-top: 25px;">
                    Belum mempunyai akun? <a href="/register" style="color: #b42424;"> <u> Daftar Disini</u></a>
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
