@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="row card-body pt-5 text-center d-flex justify-content-center">
                    <div class="col-12">
                        <h1 class="pt-5 mt-5">Apakah Anda Yakin ingin Menghapus Akun Anda?</h1>
                    </div>
                    <div class="col-6">
                        <div class="row d-flex pt-5 mt-5">
                            <a href="{{ route('hapus.akun', ['yakin' => 'ya']) }}" class="btn btn-light fs-3 col-6">Yakin</a>
                            <a href="{{ route('home') }}" class="btn btn-spectro fs-3 col-6">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
