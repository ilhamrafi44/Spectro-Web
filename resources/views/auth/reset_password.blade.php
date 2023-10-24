@extends('layouts.default')

@section('content')
    <div class="d-flex justify-content-center">

        <div class="col-md-6 row">
            <div class="col-md-12 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h1>Reset Password</h1>
                        <br>
                        <form action="{{ route('reset.update') }}" method="post">
                            @csrf
                            <div class="row d-flex">
                                <div class="mb-5">
                                    <label for="">Kata Sandi Saat Ini</label>
                                    <input type="password" name="current_password" class="form-control form-control-solid">
                                </div>
                                <div class="mb-5">
                                    <label for="">Kata Sandi Baru</label>
                                    <input type="password" name="password" class="form-control form-control-solid">
                                </div>
                                <div class="mb-5">
                                    <label for="">Ulangi Kata Sandi Baru</label>
                                    <input type="password" name="password_confirmation" class="form-control form-control-solid">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" >Update</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
