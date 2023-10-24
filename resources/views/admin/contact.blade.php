@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>List Contact US</h1>
                    <form action="{{ route('admin.contact.index') }}">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <div class="mb-5">
                                    <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control" placeholder="Enter your keyword..">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-5">
                                    <select class="form-select" aria-label="Select example" data-control="select2"
                                    name="direction">
                                    <option value="asc">Terlama</option>
                                    <option value="desc">Terbaru</option>
                                </select>                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-5">
                                    <button class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Pesan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td><a href="{{ route('admin.master.jobs.career.delete', ['id' => $item->id]) }}"
                                                class="btn btn-icon btn-primary btn-sm  "><i
                                                    class="far fa-solid fa-trash text-white"></i></a>

                                        </td>
                                    </tr>

                                    {{-- Modal Begin --}}


                                    {{-- Modal End --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
