@extends('layouts.default')

@section('content')
    <div class="container p-5">
        <div class="col-12">
            <form>
                <div class="row d-flex">
                    @csrf
                    <div class="col-md-3">
                        <div class="mb-5 ">
                            <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control"
                                placeholder="Cari Nama..">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="direction">
                                <option value="asc">Terlama</option>
                                <option value="desc">Terbaru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2" name="per_page">
                                <option value="10">10 Data Per Halaman</option>
                                <option value="50">50 Data Per Halaman</option>
                                <option value="100">100 Data Per Halaman</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-spectro col-md-3 mb-10" type="submit">Cari</button>
                </div>
            </form>
        </div>
        <div class="d-flex row">
            @foreach ($conversation as $item)
                @if ($item->user1_id === Auth::user()->id)
                    <!--begin::Card-->
                    <div class="col-md-3 mb-5">

                        <div class="card border">
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-center flex-column p-9">
                                <!--begin::Wrapper-->
                                <div class="mb-5">
                                    <div class="symbol  symbol-75px symbol-circle ">
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
                                <!--end::Wrapper-->

                                <!--begin::Name-->
                                <a class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0"
                                    target="_blank">{{ $item->user2->name }}</a>
                                <!--end::Name-->

                                <!--begin::Position-->
                                <div class="fw-semibold text-gray-400 mb-6">~</div>
                                <!--end::Position-->

                                <!--begin::Info-->
                                {{-- <div class="d-flex flex-center flex-wrap mb-5">
                                <!--begin::Stats-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                    <div class="fw-semibold text-gray-400">Avg. Earnings</div>
                                </div>
                                <!--end::Stats-->

                                <!--begin::Stats-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
                                    <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                    <div class="fw-semibold text-gray-400">Total Sales</div>
                                </div>
                                <!--end::Stats-->
                            </div> --}}
                                <!--end::Info-->

                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light-primary fw-bold col-12 mb-3"
                                    onclick="window.open('{{ route('messages.index', ['conversation_id' => $item->id]) }}', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=600,left=600,width=400,height=600'); return false;">
                                    Kirim Pesan
                                </a>
                                <a href="{{ route('conversations.delete', ['id' => $item->id]) }}"
                                    class="btn btn-primary btn-sm col-12">Hapus Percakapan</a>
                                <!--end::Link-->
                            </div>
                            <!--begin::Card body-->
                        </div>
                    </div>
                @else
                    <div class="col-md-3 mb-5">

                        <div class="card border">
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-center flex-column p-9">
                                <!--begin::Wrapper-->
                                <div class="mb-5">
                                    <div class="symbol  symbol-75px symbol-circle ">
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
                                <!--end::Wrapper-->

                                <!--begin::Name-->
                                <a class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0"
                                    target="_blank">{{ $item->user1->name }}</a>
                                <!--end::Name-->

                                <!--begin::Position-->
                                <div class="fw-semibold text-gray-400 mb-6">~</div>
                                <!--end::Position-->

                                <!--begin::Info-->
                                {{-- <div class="d-flex flex-center flex-wrap mb-5">
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mx-3 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                                <div class="fw-semibold text-gray-400">Avg. Earnings</div>
                            </div>
                            <!--end::Stats-->

                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 mx-3 px-4 mb-3">
                                <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                                <div class="fw-semibold text-gray-400">Total Sales</div>
                            </div>
                            <!--end::Stats-->
                        </div> --}}
                                <!--end::Info-->

                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light-primary fw-bold col-12 mb-3"
                                    onclick="window.open('{{ route('messages.index', ['conversation_id' => $item->id]) }}', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=600,left=600,width=400,height=600'); return false;">
                                    Kirim Pesan
                                </a>
                                <a href="{{ route('conversations.delete', ['id' => $item->id]) }}"
                                    class="btn btn-primary btn-sm col-12">Hapus Percakapan</a>
                                <!--end::Link-->
                            </div>
                            <!--begin::Card body-->
                        </div>
                    </div>
                @endif
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
