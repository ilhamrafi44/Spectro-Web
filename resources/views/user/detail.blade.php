@extends('layouts.polos')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <div class="row">
        <div class="col-md-12 mb-10">
            <div class="card">

                <div class="card-body">
                    <div class="row d-flex align-items-start">
                        <div class="col-auto">
                            <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5">
                                @if ($data?->file_profile_id == null)
                                    <img src="/assets/media/employer-avatar.jpg" alt="" height="300px">
                                @else
                                    <img src="/storage/file/images/profile/{{ $data->file_profile_id }}" alt=""
                                        height="300px">
                                @endif
                            </div>
                        </div>
                        <div class="col-4">
                            <h1 class="w-bold ">{{ $data->name }}
                                <i class="ki-duotone ki-verify fs-1 text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </h1>
                            <div class="col-md-12 fs-5 mb-5">
                                <p>{{ $profile->deskripsi ?? 'Tidak Ada Deskripsi ' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="container">

                                <div class="row d-flex">

                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>
                                        {{ $profile->alamat ?? 'Tidak Ada' }}, {{ $profile->negara ?? 'Tidak Ada' }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Berdiri Sejak : </b></a>
                                        {{ $profile->tahun_pendirian ?? 'Tidak Ada' }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-envelope"></i> <b>Email : </b></a>
                                        {{ $data->email ?? 'Tidak Ada' }}
                                    </div>
                                    <div class="col-md-6 fs-5 mb-5">
                                        <a><i class="fa-solid fa-phone"></i> <b>No Telepon : </b></a>
                                        {{ $data->nomor_telepon ?? 'Tidak Ada' }}
                                    </div>
                                    <div class="col-6 mb-5">
                                        @if ($check)
                                            <div id="response">
                                                <button type="button" onclick="destroy({{ $data->id }})"
                                                    class="btn btn-light col-12 delete"><i class="fa-solid fa-user-check"></i>
                                                    Diikuti</button>
                                            </div>
                                        @else
                                            <div id="response">
                                                <button type="button" onclick="save({{ $data->id }})"
                                                    class="btn btn-primary col-12 save"><i class="fa-solid fa-user-plus"></i>
                                                    Ikuti</button>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="col-6 h-100">
                                        <a  href="{{ route('conversations.create', ['target' => $data->id]) }}" class="btn btn-warning w-100"><i class="fa-solid fa-comments"></i>Chat </a>
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
                    <h1 class="mb-5">Pengalaman Kerja</h1>
                    @forelse ($profile->pengalaman_kerja as $pengalaman_kerja)
                        <a href="{{ route('job.detail', ['id' => $pengalaman_kerja->id]) }}"
                            class="card hover-elevate-up border parent-hover mb-5">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3> {{ $pengalaman_kerja->nama_perusahaan }} ({{ $pengalaman_kerja->jabatan }}) </h3>

                                </div>
                                <div class="col-auto mb-5">
                                    <i class="fas fa-regular fa-clock fs-3"></i> {{ $pengalaman_kerja->tanggal }}
                                </div>
                                <hr>
                                <div class="fs-4">
                                    {{ $pengalaman_kerja->deskripsi }}
                                </div>
                            </div>
                        </a>
                    @empty
                        <h3>Belum ada Pekerjaan</h3>
                    @endforelse

                </div>
            </div>

            <div class="card mb-5">
                <div class="card-body">
                    <h1 class="mb-5">Ulasan</h1>

                    @forelse ($profile->comments as $comments)
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
                                        <div class="rating-label @if ($comments->rating > 3) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                        <div class="rating-label @if ($comments->rating > 4) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <p class="text-gray-800 fs-4">{{ $comments->comment }}</p>
                            </div>
                        </div>
                    @empty
                        <h3>Belum ada ulasan</h3>
                    @endforelse
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
                    @if ($profile->social_media->count() == 0)
                        <h3>Belum Ada</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function save(idsave) {
            var id = idsave;

            var success = '<button type="button" onclick="destroy(' + id +
                ')" class="btn btn-light w-100 delete"><i class="fa-solid fa-user-check"></i> Diikuti</button>';

            var failed = '<span class="badge badge-soft-pink">' +
                'disbale' +
                '</span>';
            $.ajax({
                url: "{{ route('following.save') }}",
                type: 'POST',
                dataType: "JSON",
                data: {
                    "employer_id": id,
                    "_method": 'post',
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    k = response;
                    if (k.status == 'success') {
                        $('#response').html(success);
                    }
                    // $("#destroy" + id).remove();
                    Swal.fire({
                        text: response.data,
                        icon: response.status,
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
            $('#alert-message').alert('Gagal');
        };

        function destroy(destroy) {
            var id = destroy;

            var success = '<button type="button" onclick="save(' + id +
                ')" class="btn btn-primary w-100 save"><i class="fa-solid fa-user-plus"></i> Ikuti</button>';

            var failed = '<span class="badge badge-soft-pink">' +
                'disbale' +
                '</span>';
            $.ajax({
                url: "{{ route('following.delete') }}",
                type: 'POST',
                dataType: "JSON",
                data: {
                    "employer_id": id,
                    "_method": 'post',
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    k = response;
                    if (k.status == 'success') {
                        $('#response').html(success);
                    }
                    // $("#destroy" + id).remove();
                    Swal.fire({
                        text: response.data,
                        icon: response.status,
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success"
                        }
                    });
                }
            });

            $('#alert-message').alert('Error');
        };
    </script>
@endpush
