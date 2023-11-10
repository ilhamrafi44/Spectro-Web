@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="row card-body pt-5 text-center d-flex justify-content-center">
                    <div class="col-12">
                        <form action="{{ route('admin.jobs.index.add') }}">
                            <h1 class="pt-5 mt-5 mb-10">Pilih Employer</h1>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-md-10">
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            data-control="select2" name="id">
                                            <option value="id">Pilih Employer Terdaftar</option>
                                            @foreach ($data as $item_e)
                                                <option value="{{ $item_e->id }}">{{ $item_e->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-spectro col-12">Pilih</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="fs-3">
                            Employer Belum terdaftar? Buat Disini <a href="{{ route('admin.add.user') }}"
                                class="text-spectro">Klik
                                Disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
