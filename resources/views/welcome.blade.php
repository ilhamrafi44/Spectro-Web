@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    <h1>Selamat Datang</h1>
                    <div class="text-center">

                            <a href="{{ route('login') }}" class="btn m-1 btn-lg btn-spectro">Masuk</a>

                            <a href="{{ route('register') }}" class="btn m-1 btn-lg btn-light">Daftar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
