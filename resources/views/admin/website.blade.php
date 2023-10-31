@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <h1>Konfigurasi Website</h1>
                    <form action="{{ route('admin.web.update') }}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label for="">Nama Website</label>
                            <input type="text" name="nama_website" value="{{ $data->nama_website }}"
                                class="form-control form-control-solid">
                        </div>
                        <div class="mb-5">
                            <label for="">Nomor Telepon</label>
                            <input type="text" name="nomor_hp" value="{{ $data->nomor_hp }}"
                                class="form-control form-control-solid">
                        </div>
                        <div class="mb-5">
                            <label for="">Alamat Kantor</label>
                            <input type="text" name="alamat" value="{{ $data->alamat }}"
                                class="form-control form-control-solid">
                        </div>
                        <div class="mb-5">
                            <label for="">Deskripsi Website</label>
                            <textarea type="text" name="deskripsi_website" class="form-control form-control-solid">{{ $data->deskripsi_website }}</textarea>
                        </div>
                        <div class="mb-5">
                            <label for="">Tags Website</label>
                            <input type="text" name="tags_website" id="kt_tagify_1"
                                value="{{ $data->tags_website }}" class="form-control form-control-solid">
                        </div>
                        <div class="mb-5">
                            <label for="">About Us</label>
                            <textarea type="text" name="about_us" id="about" class="form-control form-control-solid">{{ $data->about_us }}</textarea>
                        </div>
                        <div class="mb-5">
                            <label for="">Syarat Dan Ketentuan</label>
                            <textarea type="text" name="terms" id="terms" class="form-control form-control-solid">{{ $data->terms }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-spectro col-12">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#kt_tagify_1").each(function() {
                new Tagify(this);
            });
        });
        ClassicEditor
            .create(document.querySelector('#about'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#terms'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
