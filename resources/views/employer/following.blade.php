@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>Candidate Diikuti</h1>
                    <form>
                        <div class="row d-flex">
                            @csrf
                            <div class="col-md-5">
                                <div class="mb-5 ">
                                    <input type="text" name="name" value="{{ request()->get('name') }}"
                                        class="form-control" placeholder="Enter your keyword..">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-5 ">
                                    <select class="form-select" aria-label="Select example" data-control="select2"
                                        name="direction">
                                        <option value="asc">Terlama</option>
                                        <option value="desc">Terbaru</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-spectro col-md-2 mb-5" type="submit">Cari</button>
                        </div>
                    </form>
                    @foreach ($data as $item)
                        <div class="card mb-5 hover-elevate-up border parent-hover">
                            <div class="card-body">
                                <div class="row d-flex flex-columns align-items-center">
                                    <div class="col-auto">
                                        <div class="symbol symbol-100px symbol-lg-100px symbol-fixed shadow mb-5">
                                            @if ($item->following->file_profile_id == null)
                                                <img src="/assets/media/employer-avatar.jpg" alt="" height="100px">
                                            @else
                                                <img src="/storage/file/images/profile/{{ $item->following->file_profile_id }}"
                                                    alt="" height="100px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h3> {{ $item->following->name }} </h3>
                                        <p>Anda mengikuti pada :
                                            {{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}
                                        </p>
                                    </div>
                                    <div class="col-auto ms-auto">
                                        <a href="{{ route('detai.candidate', ['id' => $item->following->id]) }}"
                                            class="btn btn-light m-1" target="_blank">Lihat</a>
                                        <a href="{{ route('following.saved.destroy', ['id' => $item->id]) }}"
                                            class="btn btn-primary m-1">Unfollow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if ($data->count() > 0)
                        <!-- Tampilkan link pagination -->
                        {{ $data->appends(request()->except('page'))->links() }}
                    @else
                        @include('layouts.data404')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
