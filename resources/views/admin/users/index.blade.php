@extends('layouts.default')

@section('heads')
<a href="{{ route('user.export') }}" class="btn btn-flex btn-sm bg-success text-white bg-body fw-bold px-4">
    Export Data
</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>List Data User</h1>
                    <form>
                        <div class="row d-flex">
                            @csrf
                            <div class="col-md-4">
                                <div class="mb-5 ">
                                    <input type="text" name="name" value="{{ request()->get('name') }}"
                                        class="form-control" placeholder="Enter your keyword..">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-5 ">
                                    <select class="form-select" aria-label="Select example" data-control="select2"
                                        name="direction">
                                        <option value="asc">Terlama</option>
                                        <option value="desc">Terbaru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-5 ">
                                    <select class="form-select" aria-label="Select example" data-control="select2"
                                        name="role">
                                        <option value="">Pilih Role</option>
                                        <option value="2">Employer</option>
                                        <option value="1">Candidate</option>
                                        <option value="3">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-5 ">
                                    <select class="form-select" aria-label="Select example" data-control="select2"
                                        name="per_page">
                                        <option value="10">10 Data PerPage</option>
                                        <option value="50">50 Data PerPage</option>
                                        <option value="100">100 Data PerPage</option>
                                        <option value="250">250 Data PerPage</option>
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Terdaftar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @if ($item->role == 1)
                                            Candidate
                                            @elseif ($item->role == 2)
                                            Employer
                                            @else
                                            Admin
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><a href="{{ route('admin.users.delete', ['id' => $item->id]) }}"
                                                class="btn btn-icon btn-primary btn-sm"><i
                                                    class="far fa-solid fa-trash text-white"></i></a>
                                            <button type="button" class="btn btn-sm btn-icon btn-warning"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_{{ $loop->iteration }}"><i
                                                    class="far fa-solid fa-pen text-white"></i></button>
                                                    <a href="{{ route('conversations.create', ['target' => $item->id]) }}" class="btn btn-icon btn-info btn-sm">Chat</a>
                                        </td>
                                    </tr>

                                    {{-- Modal Begin --}}

                                    <div class="modal fade" tabindex="-1" id="kt_modal_{{ $loop->iteration }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.users.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">Edit Data</h3>

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
                                                                        class="required form-label">User
                                                                        Name</label>
                                                                    <input name="name" type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="" value="{{ $item->name }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-5">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="required form-label">User
                                                                        Email</label>
                                                                    <input name="email" type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="" value="{{ $item->email }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-5">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="required form-label">User
                                                                        Password</label>
                                                                    <input name="password" type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="Kosongkan jika tidak ingin diubah" value="" />
                                                                </div>
                                                            </div>

                                                            @if ($item->role == 2)
                                                            <div class="col-md-12">
                                                                <div class="mb-5">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="required form-label">Can Make A JOB?</label>
                                                                    <input class="form-check-input" type="checkbox" value="1"
                                                                    id="flexCheckDefault1" name="can_create_job"
                                                                    @if (isset($item->can_create_job)) checked @endif />
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
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
    </div>
@endsection
