@extends('layouts.landing')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <div class="row d-flex mt-5 pt-5 mb-10">
        <div class="col-md-6 d-flex align-items-center">
            <div class="card d-flex align-items-center">
                <div class="column">

                    <h1 style="font-size: 50px;">Selamat Datang</h1>
                    <p style="font-size: 30px;">
                        Temukan job yang
                        sesuai dan
                        hidupkan mimpimu
                        100+ Pekerjaan
                    </p>
                </div>
                <div class="column align-self-start">
                    <a href="{{ route('login') }}" class="btn m-1 btn-lg btn-spectro">Masuk</a>
                    <a href="{{ route('register') }}" class="btn m-1 btn-lg btn-light">Daftar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <img class="img-fluid"
                src="https://img.freepik.com/free-vector/tiny-people-searching-business-opportunities_74855-19928.jpg?w=1380&t=st=1697094041~exp=1697094641~hmac=b8b3ec4e4535635ce2f05c52e145a169e6ef7404e0246905e2532511c711ca7a"
                alt="">
        </div>
    </div>

    <div class="row bg-white shadow-lg rounded-3 mb-10 py-5 my-19">
        <div class="container p-5">
            <h1>Cari Pekerjaan</h1>
            <div class="separator my-5"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="required form-label">Jobs Category</label>
                        <select class="form-select form-select-solid" aria-label="Select example" data-control="select2"
                            name="category_id">
                            @foreach ($category as $item_c)
                                <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="required form-label">Jobs Industry</label>
                        <select class="form-select form-select-solid" aria-label="Select example" data-control="select2"
                            name="category_id">
                            @foreach ($category as $item_c)
                                <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="required form-label">Jobs Location</label>
                        <select class="form-select form-select-solid" aria-label="Select example" data-control="select2"
                            name="category_id">
                            @foreach ($category as $item_c)
                                <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="mt-7">
                    <a href="" class="btn btn-lg btn-primary col-12">Cari Kerja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-white my-17">
        <div class="container p-5 my-17">
            <h1>Explore Category</h1>
            <div class="row d-flex">
                @foreach ($category as $item_c)
                    <a href="#" class="btn btn-light bg-white border m-2 btn-lg fs-1 p-10 col-md-4 col-6"><i class="fas fa-solid fa-briefcase fs-1 me-2"></i>  {{ $item_c->name }}</a>
                @endforeach
            </div>
        </div>
    </div>


@endsection
