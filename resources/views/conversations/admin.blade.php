@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="col-12">
            <form>
                <div class="row d-flex">
                    @csrf
                    <div class="col-3">
                        <div class="mb-5 ">
                            <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control"
                                placeholder="Cari Nama..">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="direction">
                                <option value="asc">Terlama</option>
                                <option value="desc">Terbaru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="per_page">
                                <option value="10">10 Data Per Halaman</option>
                                <option value="50">50 Data Per Halaman</option>
                                <option value="100">100 Data Per Halaman</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-spectro col-3 mb-5" type="submit">Cari</button>
                </div>
            </form>
        </div>
        <div class="d-flex row">

            @foreach ($conversation as $item)
                <!--begin::Card-->

                <div class="col-md-3 mb-5">

                    <div class="card border">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column p-9">
                            <div class="row d-flex align-items-center mb-10 justify-content-center">
                                <!--begin::Wrapper-->
                                <div class="col-5 text-center">
                                    <div class="mb-5">
                                        <div class="symbol  symbol-75px symbol-circle border shadow">
                                            <!--begin::Avatar-->
                                            @if ($item->user2->file_profile_id == null)
                                                <img alt="Logo" class="symbol symbol-35px"
                                                    src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" />
                                            @else
                                                <img alt="Logo" class="symbol symbol-35px"
                                                    src="/storage/file/images/profile/{{ $item->user2->file_profile_id }}" />
                                            @endif
                                        </div>
                                    </div>
                                    <a class="fs-7 text-gray-800 text-hover-primary text-center fw-bold mb-5"
                                        target="_blank">{{ $item->user2->name }}</a>
                                </div>
                                <div class="col-md-2 text-center fs-2 fw-bolder">
                                    ~
                                </div>
                                <div class="col-5">
                                    <div class="mb-5 text-center">
                                        <div class="symbol  symbol-75px symbol-circle border shadow">
                                            <!--begin::Avatar-->
                                            @if ($item->user1->file_profile_id == null)
                                                <img alt="Logo" class="symbol symbol-35px"
                                                    src="https://t4.ftcdn.net/jpg/04/10/43/77/360_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg" />
                                            @else
                                                <img alt="Logo" class="symbol symbol-35px"
                                                    src="/storage/file/images/profile/{{ $item->user1->file_profile_id }}" />
                                            @endif
                                        </div>
                                    </div>
                                    <a class="fs-7 text-gray-800 text-hover-primary text-center fw-bold mb-5"
                                        target="_blank">{{ $item->user1->name }}</a>
                                </div>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Name-->

                            <!--end::Name-->

                            <!--begin::Position-->
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-light-primary fw-bold col-12 mb-3"
                                onclick="window.open('{{ route('messages.admin', ['conversation_id' => $item->id]) }}', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=600,left=600,width=500,height=600'); return false;">
                                Monitoring Pesan
                            </a>
                            <a href="{{ route('conversations.delete', ['id' => $item->id]) }}"
                                class="btn btn-primary btn-sm col-12">Hapus Percakapan</a>
                            <!--end::Link-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                </div>
            @endforeach
            @if ($conversation->count() > 0)
                <!-- Tampilkan link pagination -->
                {{ $conversation->appends(request()->except('page'))->links() }}
            @else
                @include('layouts.data404')
            @endif
        </div>
    </div>
@endsection
