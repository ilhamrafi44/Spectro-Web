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
                {{-- @if (!Auth::user())
                    <div class="column align-self-start">
                        <a href="{{ route('login') }}" class="btn m-1 btn-lg btn-spectro">Masuk</a>
                        <a href="{{ route('register') }}" class="btn m-1 btn-lg btn-light">Daftar</a>
                    </div>
                @endif --}}
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <img class="img-fluid"
                src="https://img.freepik.com/free-vector/tiny-people-searching-business-opportunities_74855-19928.jpg?w=1380&t=st=1697094041~exp=1697094641~hmac=b8b3ec4e4535635ce2f05c52e145a169e6ef7404e0246905e2532511c711ca7a"
                alt="">
        </div>
    </div>

    <div class="row bg-white shadow-lg rounded-3 mb-10 py-5 my-19 hover-elevate-up parent-hover">
        <div class="container p-5">
            <h1>Cari Pekerjaan</h1>
            <div class="separator my-5"></div>
            <form action="{{ route('job.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class=" form-label">Jobs Category</label>
                            <select class="form-select form-select-solid" aria-label="Select example" data-control="select2"
                                name="category_id">
                                <option value="">Semua Kategori</option>
                                @foreach ($category as $item_c)
                                    <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class=" form-label">Jobs Industry</label>
                            <select class="form-select form-select-solid" aria-label="Select example" data-control="select2"
                                name="industry_id">
                                <option value="">Semua Industri</option>

                                @foreach ($industry as $item_i)
                                    <option value="{{ $item_i->id }}">{{ $item_i->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class=" form-label">Jobs Location</label>
                            <select class="form-select form-select-solid" aria-label="Select example" data-control="select2"
                                name="location_id">
                                <option value="">Semua Lokasi</option>

                                @foreach ($location as $locationss)
                                    <option value="{{ $locationss->location_id }}">{{ $locationss->location_id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mt-7">
                            <button type="submit" href="" class="btn btn-lg btn-primary col-12">Cari Kerja</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row bg-white my-17">
        <div class="container p-5 my-17">
            <h1>Explore Category</h1>
            <div class="row d-flex mb-5">
                @foreach ($show_category as $item_c)
                    <a href="{{ route('job.index', ['category_id' => $item_c]) }}"
                        class="card col-md-4 col-12 border m-3 hover-elevate-up parent-hover">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 mb-3">
                                    <i class="fas fa-solid fa-briefcase fs-1 me-2"></i>
                                </div>
                                <div class="col-auto">
                                    <h3>
                                        {{ $item_c->name }}
                                    </h3>
                                    Total Pekerjaan : {{ $item_c->jobs->count() ?? 'Belum Ada' }}
                                </div>
                            </div>

                        </div>
                    </a>
                    {{-- <a href="#" class="btn btn-light bg-white border m-2 btn-lg fs-1 p-10 col-md-4 col-5"><i class="fas fa-solid fa-briefcase fs-1 me-2"></i>  {{ $item_c->name }} <br> Total Lowongan : 9</a> --}}
                @endforeach
            </div>
            <a href="{{ route('job.index') }}" class="text-spectro fs-3 mt-5">Lihat Semua...</a>

        </div>
    </div>

    <div class="row bg-white my-10">
        <div class="container p-5 my-10">
            <h1>Explore Jobs</h1>
            <div class="row d-flex mt-10 mb-5">
                @forelse ($data_job as $jobs)
                    <div class="col-md-4">
                        <a href="{{ route('job.detail', ['id' => $jobs->id]) }}"
                            class="card hover-elevate-up border parent-hover">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3> {{ $jobs->name }} </h3>
                                    <button class="btn btn-sm btn-light m-1 btn-icon col-4 "><i
                                            class="fas fa-regular fa-bookmark"></i></button>
                                </div>
                                <hr>
                                <div class="row d-flex mt-7">
                                    <div class="col-auto mb-5">
                                        <i class="fas fa-solid fa-briefcase fs-3"></i> {{ $jobs->category->name }}
                                    </div>
                                    <div class="col-auto mb-5">
                                        <i class="fas fa-solid fa-location-dot fs-3"></i> {{ $jobs->location_id }}
                                    </div>
                                    <div class="col-auto mb-5">
                                        <i class="fas fa-regular fa-clock fs-3"></i>
                                        {{ \Carbon\Carbon::parse($jobs->created_at)->toFormattedDateString() }}
                                    </div>
                                    <div class="col-auto mb-5">
                                        <i class="fas fa-solid fa-money-bill-wave fs-3"></i>
                                        @if ($jobs->mata_gaji == 1)
                                            ¥
                                        @elseif ($jobs->mata_gaji == 2)
                                            USD
                                        @else
                                            Rp
                                        @endif {{ number_format($jobs->salary) }}
                                        / {{ $jobs->salary_type }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    @include('layouts.data404')
                @endforelse

            </div>
            <a href="{{ route('job.index') }}" class="text-spectro fs-3 mt-5">Lihat Semua...</a>
        </div>
    </div>
    <div class="row bg-white my-10">
        <div class="container p-5 my-10">
            <h1 class="mb-17">Our Client</h1>
            <div class="row d-flex justify-content-center">
                @forelse ($client as $cl)
                    <div class="col-md-2 mx-5 my-10 col-auto">
                        <img src="/assets/media/misc/spinner.gif" data-src="/storage/file/images/testimonial/{{ $cl->picture }}" class="img-fluid lozad"
                            style="height: 50px;" alt="">
                    </div>
                @empty
                    @include('layouts.data404')
                @endforelse
            </div>
        </div>
    </div>
    <div class="row bg-white my-10">
        <div class="container p-5 my-10">
            <h1 class="mb-17">Our Testimonial</h1>
            <div class="owl-carousel owl-theme owl-loaded loop">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($testimonials as $testimoni)
                            <div class="owl-item">
                                <div class="card border m-2">
                                    <div class="card-body text-center">
                                        <div class="text-center">
                                            <div class="symbol symbol-75px symbol-circle lozad">
                                                <img alt="Logo" src="/assets/media/misc/spinner.gif"
                                                data-src="/storage/file/images/testimonial/{{ $testimoni->picture }}" />
                                            </div>
                                            <figure>
                                                <blockquote class="blockquote">
                                                    <p>“{{ $testimoni->message }}”</p>
                                                </blockquote>
                                                <figcaption class="blockquote-footer">
                                                    {{ $testimoni->nama }} <cite
                                                        title="Source Title">({{ $testimoni->dari }})</cite>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
