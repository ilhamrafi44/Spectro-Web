@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>List Job Industries</h1>
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Industri</th>
                                    <th scope="col">Diubah Oleh</th>
                                    <th scope="col">Tanggal Diubah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->creator->name }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td><a href="{{ route('admin.jobs.industry.delete', ['id' => $item->id]) }}"
                                                class="btn btn-icon btn-primary btn-sm  "><i
                                                    class="far fa-solid fa-trash text-white"></i></a>
                                            <button type="button" class="btn btn-sm btn-icon btn-warning"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_{{ $loop->iteration }}"><i
                                                    class="far fa-solid fa-pen text-white"></i></button>
                                        </td>
                                    </tr>

                                    {{-- Modal Begin --}}

                                    <div class="modal fade" tabindex="-1" id="kt_modal_{{ $loop->iteration }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.jobs.industry.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">Edit Jobs Category</h3>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="ki-duotone ki-cross fs-1"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row d-flex">

                                                            <div class="col-md-12">
                                                                <div class="mb-5">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="required form-label">Jobs Industry
                                                                        Created By</label>
                                                                    <input name="name" type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="" value="{{ $item->creator->name }}"
                                                                        disabled />
                                                                </div>
                                                                <div class="mb-5">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="required form-label">Jobs Industry
                                                                        Name</label>
                                                                    <input name="name" type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="" value="{{ $item->name }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Modal End --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($data->count() > 0)
                        <!-- Tampilkan link pagination -->
                        {{ $data->appends(request()->query())->links() }}
                    @else
                        @include('layouts.data404')
                    @endif

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h1>Create Job Industri</h1>
                    <form action="{{ route('admin.jobs.industry.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex">

                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jobs Industri
                                        Name</label>
                                    <input name="name" type="text" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <button class="btn btn-primary btn-md" type="submit">Create Industri</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
