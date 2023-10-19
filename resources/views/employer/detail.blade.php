@extends('layouts.polos')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <div class="row">
        <div class="col-md-12 mb-10">
            <div class="card">
                @if ($profile?->file_sampul_id == null)
                    <img src="/assets/media/banner-default.jpg" alt="" class="card-img-top" height="200px">
                @else
                    <img src="/storage/file/images/employer/{{ $profile->file_sampul_id }}" alt="" class="card-img-top"
                        height="200px">
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5"
                                style="margin-top: -100%;">
                                @if ($profile?->file_logo_id == null)
                                    <img src="/assets/media/employer-avatar.jpg" alt="" height="300px">
                                @else
                                    <img src="/storage/file/images/employer/{{ $profile->file_logo_id }}" alt=""
                                        height="300px">
                                @endif
                            </div>
                            <div class="container">
                                <h1 class="w-bold ">{{ $data->name }}
                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </h1>

                                <p>
                                    {{ $profile->deskripsi }}
                                </p>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="container">
                                <div class="row d-flex">
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>
                                        {{ $profile->alamat }}, {{ $profile->negara }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Berdiri Sejak : </b></a>
                                        {{ $profile->tahun_pendirian }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-envelope"></i> <b>Email : </b></a>
                                        {{ $data->email }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-phone"></i> <b>No Telepon : </b></a>
                                        {{ $data->nomor_telepon }}
                                    </div>
                                    <div class="col-6 h-100">
                                        <div class="btn btn-primary w-100"><i class="fa-solid fa-user-plus"></i> Follow
                                        </div>
                                    </div>
                                    <div class="col-6 h-100">
                                        <div class="btn btn-warning w-100"><i class="fa-solid fa-comments"></i>Chat </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex">
        <div class="col-md-8 mb-5">
            <div class="card mb-5">
                <div class="card-body">
                    <h1 class="mb-5">List Job</h1>
                    @foreach ($profile->jobs as $jobs)
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
                    @endforeach

                </div>
            </div>

            <div class="card mb-5">
                <div class="card-body">
                    <h1 class="mb-5">Ulasan</h1>
                    @foreach ($profile->comments as $comments)
                        <div class="card hover-elevate-up border parent-hover">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
From:
                                        <h3> {{ $comments->creator->name }} </h3>
                                    </div>
                                    <div class="rating">
                                        <div class="rating-label  @if ($comments->rating > 0) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                        <div class="rating-label @if ($comments->rating > 1) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                        <div class="rating-label @if ($comments->rating > 2) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                        <div class="rating-label @if ($comments->rating >3) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                        <div class="rating-label @if ($comments->rating >4) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <p class="text-gray-800 fs-4">{{ $comments->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card mb-5">
                <div class="card-body">
                    <h1>Posting Ulasan</h1>
                    <div class="mb-5 mt-5">
                        <form action="{{ route('rating.store') }}" method="POST">
                            @csrf
                            @if (Auth::user())
                                <p>Berkomentar Sebagai : {{ Auth::user()->name }}</p>
                            @endif
                            <input type="hidden" name="user_id" value="{{ $data->id }}">
                            <label for="" class="mb-2">Rating:</label>
                            <div class="rating mb-5">
                                <!--begin::Reset rating-->
                                <input class="rating-input" name="rating" value="0" checked type="radio"
                                    id="kt_rating_2_input_0" />
                                <!--end::Reset rating-->

                                <!--begin::Star 1-->
                                <label class="rating-label" for="kt_rating_2_input_1">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                </label>
                                <input class="rating-input" name="rating" value="1" type="radio"
                                    id="kt_rating_2_input_1" />
                                <!--end::Star 1-->

                                <!--begin::Star 2-->
                                <label class="rating-label" for="kt_rating_2_input_2">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                </label>
                                <input class="rating-input" name="rating" value="2" type="radio"
                                    id="kt_rating_2_input_2" />
                                <!--end::Star 2-->

                                <!--begin::Star 3-->
                                <label class="rating-label" for="kt_rating_2_input_3">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                </label>
                                <input class="rating-input" name="rating" value="3" type="radio"
                                    id="kt_rating_2_input_3" />
                                <!--end::Star 3-->

                                <!--begin::Star 4-->
                                <label class="rating-label" for="kt_rating_2_input_4">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                </label>
                                <input class="rating-input" name="rating" value="4" type="radio"
                                    id="kt_rating_2_input_4" />
                                <!--end::Star 4-->

                                <!--begin::Star 5-->
                                <label class="rating-label" for="kt_rating_2_input_5">
                                    <i class="ki-duotone ki-star fs-1"></i>
                                </label>
                                <input class="rating-input" name="rating" value="5" type="radio"
                                    checked="checked" id="kt_rating_2_input_5" />
                                <!--end::Star 5-->
                            </div>
                            <label for="" class="mb-2">Komentar:</label>
                            <textarea name="comment" id="" cols="30" rows="4" placeholder="Tulis Komentar Anda Disini..."
                                class="form-control"></textarea>
                            <button class="btn btn-primary mt-4" type="submit">Posting</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>Social Media</h1>
                    <div class="separator mb-5"></div>
                    @foreach ($profile->social_media as $sosmed)
                        <a href="{{ $sosmed->link }}" class="mb-5 btn btn-light border col-12">{{ $sosmed->jenis }}</a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
