@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-8 mb-5">
        <div class="card">
            <div class="card-body">
                <h1>List Job Category</h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th scope="col">#</th>
                                <th scope="col">Nama Category</th>
                                <th scope="col">Dibuat Oleh</th>
                                <th scope="col">Tanggal Dibuat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>~</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="{{ route('employer.jobs.category.delete', ['id' => $item->id]) }}" class="btn btn-spectro btn-sm"><i
                                        class="far fa-solid fa-trash text-white"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h1>Create Job Category</h1>
                <form action="{{ route('employer.jobs.category.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex">

                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Jobs Category Name</label>
                                <input name="name" type="text" class="form-control form-control-solid"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-5">
                                <button class="btn btn-primary btn-md" type="submit">Create Category</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
