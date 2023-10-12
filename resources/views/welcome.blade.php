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
                    <div class="card col-md-4 col-12 border m-3 shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 mb-3">
                                    <i class="fas fa-solid fa-briefcase fs-1 me-2"></i>
                                </div>
                                <div class="col-auto">
                                    <h3>
                                        {{ $item_c->name }}
                                    </h3>
                                    Total Pekerjaan : 9
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- <a href="#" class="btn btn-light bg-white border m-2 btn-lg fs-1 p-10 col-md-4 col-5"><i class="fas fa-solid fa-briefcase fs-1 me-2"></i>  {{ $item_c->name }} <br> Total Lowongan : 9</a> --}}
                @endforeach
            </div>
        </div>
    </div>

    <div class="row bg-white my-10">
        <div class="container p-5 my-10">
            <h1>Explore Category</h1>
            <div class="row d-flex">
                @foreach ($data_job as $item)
                    <div class="col-md-4 mb-5">
                        <div class="card border-1 shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title">{{ $item->name }}</h3>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-sm m-1 btn-light">
                                        Open
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 mb-5">
                                        <i class="las la-briefcase fs-4x"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row d-flex">
                                            <div class="col-md-6 fs-7 mb-5">
                                                <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi :
                                                        {{ $item->location_id }}</b></a>

                                            </div>
                                            <div class="col-md-6 fs-7 mb-5">
                                                <a><i class="fa-solid fa-calendar-days"></i> <b>Expired :
                                                        {{ $item->expired_date }}</b></a>

                                            </div>
                                            <div class="col-md-6 fs-7 mb-5">
                                                <a><i class="fa-solid fa-calendar-days"></i> <b>Created :
                                                        {{ $item->created_at }}</b></a>

                                            </div>
                                            <div class="col-md-6 fs-7 mb-5">
                                                <a><i class="fa-solid fa-envelope"></i> <b>Total Pelamar : </b></a>

                                            </div>
                                            <div class="col-md-6 fs-7 mb-5">
                                                <a><i class="fa-solid fa-bookmark"></i> <b>Total Disimpan: </b></a>

                                            </div>
                                            {{-- <div class="col-6 h-100">
                                    <div class="btn btn-primary w-100"><i class="fa-solid fa-user-plus"></i> Follow </div>
                                </div>
                                <div class="col-6 h-100">
                                    <div class="btn btn-warning w-100"><i class="fa-solid fa-comments"></i>Chat </div>
                                </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row bg-white my-10">
        <div class="container p-5 my-10">
            <h1 class="mb-17">Our Client</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-md-2 mx-5 my-10 col-auto">
                    <img src="https://spectro.id/wp-content/uploads/2023/07/cariilmu.png" class="img-fluid" style="height: 50px;" alt="">
                </div>
                <div class="col-md-2 mx-5 my-10 col-auto">
                    <img src="https://spectro.id/wp-content/uploads/2023/07/ids.png" class="img-fluid" style="height: 50px;" alt="">
                </div>
                <div class="col-md-2 mx-5 my-10 col-auto">
                    <img src="https://spectro.id/wp-content/uploads/2023/07/edufund.jpeg" class="img-fluid" style="height: 50px;" alt="">
                </div>
                <div class="col-md-2 mx-5 my-10 col-auto">
                    <img src="https://spectro.id/wp-content/uploads/2023/07/personix.jpeg" class="img-fluid" style="height: 50px;" alt="">
                </div>
                <div class="col-md-2 mx-5 my-10 col-auto">
                    <img src="https://spectro.id/wp-content/uploads/2023/07/univ-siber.png" class="img-fluid" style="height: 50px;" alt="">
                </div>
                <div class="col-md-2 mx-5 my-10 col-auto">
                    <img src="https://spectro.id/wp-content/uploads/2023/07/karirmu.png" class="img-fluid" style="height: 50px;" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
