@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <form action="{{ route('employer.jobs.update.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id">
        <div class="row">
            <div class="col-md-12 mb-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">Update Job </h4>
                        <div class="row d-flex">
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Nama
                                        Pekerjaan</label>
                                    <input name="name" type="text" class="form-control form-control-solid"
                                        placeholder="" value="{{ $data->name }}" />

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Lokasi
                                        Pekerjaan</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        id="select-location" name="location_id">
                                        @foreach ($location_available as $location)
                                            <option value="{{ $location->location_id }}"
                                                {{ $data->location_id == $location->location_id ? 'selected' : '' }}>
                                                {{ $location->location_id }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">URL Video
                                        Perkenalan</label>
                                    <input name="link" type="text" class="form-control form-control-solid"
                                        placeholder="" value="{{ $data->link }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Expired Date</label>
                                    <input name="expired_date" type="date" class="form-control form-control-solid"
                                        placeholder="" value="{{ $data->expired_date }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jobs Category</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="category_id">
                                        @foreach ($category as $item_c)
                                            <option value="{{ $item_c->id }}"
                                                {{ $data->category_id == $item_c->id ? 'selected' : '' }}>
                                                {{ $item_c->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jobs Industry</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="industry_id">
                                        @foreach ($industry as $item_i)
                                            <option value="{{ $item_i->id }}"
                                                {{ $data->industry_id == $item_i->id ? 'selected' : '' }}>
                                                {{ $item_i->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">PIC 1</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="pic_1">
                                        @foreach ($karyawan as $item_c)
                                            <option value="{{ $item_c->id }}"
                                                {{ $data->pic_1 == $item_c->id ? 'selected' : '' }}>{{ $item_c->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">PIC 2</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="pic_2">
                                        <option value="" {{ is_null($data->pic_2) ? 'selected' : '' }}>Tidak Dipilih
                                        </option>
                                        @foreach ($karyawan as $item_c)
                                            <option value="{{ $item_c->id }}"
                                                {{ $data->pic_2 == $item_c->id ? 'selected' : '' }}>{{ $item_c->nama }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                        Pekerjaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="deskripsi" id="deskripsi" />{{ $data->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Jumlah
                                        Kandidat</label>
                                    <input name="jumlah_kandidat" type="text" class="form-control form-control-solid"
                                        placeholder="" value="{{ $data->jumlah_kandidat }}" />

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Jenis
                                        Kelamin</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="jenis_kelamin">
                                        <option value="semua" {{ $data->jenis_kelamin == 'semua' ? 'selected' : '' }}>
                                            Semua</option>
                                        <option value="man" {{ $data->jenis_kelamin == 'man' ? 'selected' : '' }}>Laki
                                            - Laki</option>
                                        <option value="woman" {{ $data->jenis_kelamin == 'woman' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Pengalaman</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="experience">
                                        @foreach ($experience as $item_e)
                                            <option value="{{ $item_e->id }}"
                                                {{ $data->experience == $item_e->id ? 'selected' : '' }}>
                                                {{ $item_e->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Kualifikasi</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="kualifikasi">
                                        @foreach ($qualification as $item_k)
                                            <option value="{{ $item_k->id }}"
                                                {{ $data->kualifikasi == $item_k->id ? 'selected' : '' }}>
                                                {{ $item_k->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Level Karir</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="career_level">
                                        @foreach ($career as $item_c)
                                            <option value="{{ $item_c->id }}"
                                                {{ $data->career_level == $item_c->id ? 'selected' : '' }}>
                                                {{ $item_c->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Job Tipe</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="job_type">
                                        @foreach ($type as $item_t)
                                            <option value="{{ $item_t->id }}"
                                                {{ $data->job_type == $item_t->id ? 'selected' : '' }}>{{ $item_t->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="separator mb-5">
                            </div>


                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Hari Libur</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="hari_libur"
                                        id="hari_libur" />{{ $data->hari_libur }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Waktu
                                        Istirahat</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="waktu_istirahat"
                                        id="waktu_istirahat" /> {{ $data->waktu_istirahat }} </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Waktu
                                        Kerja</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="waktu_kerja"
                                        id="waktu_kerja" />{{ $data->waktu_kerja }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Catatan
                                        Pekerjaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="catatan" id="catatan" />{{ $data->catatan }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">Informasi Gaji </h4>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Total Gaji</label>
                                <div class="input-group mb-5">
                                    <select class="form-select" aria-label="Default select example" name="mata_gaji">
                                        <option value="1" {{ $data->mata_gaji == 1 ? 'selected' : '' }}>¥ (Yen)
                                        </option>
                                        <option value="2" {{ $data->mata_gaji == 2 ? 'selected' : '' }}>USD (US
                                            Dollar)</option>
                                        <option value="3" {{ $data->mata_gaji == 3 ? 'selected' : '' }}>Rp (Rupiah)
                                        </option>
                                    </select>

                                    <input type="number" name="salary" class="form-control"
                                        value="{{ $data->salary }}" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Tipe Gaji</label>
                                <select class="form-select form-select-solid" aria-label="Select example"
                                    data-control="select2" name="salary_type">
                                    <option value="Hourly" {{ $data->salary_type == 'Hourly' ? 'selected' : '' }}>Hourly
                                    </option>
                                    <option value="Daily" {{ $data->salary_type == 'Daily' ? 'selected' : '' }}>Daily
                                    </option>
                                    <option value="Monthly" {{ $data->salary_type == 'Monthly' ? 'selected' : '' }}>
                                        Monthly</option>
                                    <option value="Yearly" {{ $data->salary_type == 'Yearly' ? 'selected' : '' }}>Yearly
                                    </option>
                                    <option value="Projectly" {{ $data->salary_type == 'Projectly' ? 'selected' : '' }}>
                                        Projectly</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                    Gaji</label>
                                <textarea class="form-control form-control-solid" placeholder="" rows="5" name="info_gaji" id="info_gaji" />{{ $data->info_gaji }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">Informasi Tunjangan </h4>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Total Tunjangan
                                </label>
                                <div class="input-group mb-5">
                                    <select class="form-select" aria-label="Default select example"
                                        name="mata_tunjangan">
                                        <option value="1" {{ $data->mata_tunjangan == 1 ? 'selected' : '' }}>¥ (Yen)
                                        </option>
                                        <option value="2" {{ $data->mata_tunjangan == 2 ? 'selected' : '' }}>USD (US
                                            Dollar)</option>
                                        <option value="3" {{ $data->mata_tunjangan == 3 ? 'selected' : '' }}>Rp
                                            (Rupiah)</option>
                                    </select>

                                    <input type="number" name="total_tunjangan" class="form-control"
                                        value="{{ $data->total_tunjangan }}" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                    Tunjangan</label>
                                <textarea rows="5" name="info_tunjangan" id="info_tunjangan" />{{ $data->info_tunjangan }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-spectro">Simpan / Update</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        $("#select-location").select2({
            tags: true
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#info_tunjangan'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#info_gaji'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#hari_libur'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#waktu_istirahat'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#catatan'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#waktu_kerja'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
