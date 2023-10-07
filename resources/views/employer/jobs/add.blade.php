@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <form action="{{ route('employer.jobs.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-10">
                <!--begin::Accordion-->
                <!--end::Accordion-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">Create Job </h4>
                        <div class="row d-flex">
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jobs Category</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="kategori_perusahaan">
                                        @foreach ($category as $item_c)
                                            <option value="{{ $item_c->id }}">{{ $item_c->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jobs Industry</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="kategori_perusahaan">
                                        @foreach ($industry as $item_i)
                                            <option value="{{ $item_i->id }}">{{ $item_i->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Nama
                                        Pekerjaan</label>
                                    <input name="name" type="text" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                        Pekerjaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="deskripsi" />  </textarea>
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
                                <label for="exampleFormControlInput1" class="required form-label">Total Gaji (Yen)</label>
                                <div class="input-group mb-5">
                                    <span class="input-group-text">¥</span>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Tipe Gaji</label>
                                <select class="form-select form-select-solid" aria-label="Select example"
                                    data-control="select2" name="kategori_perusahaan">
                                    <option value="1">Hourly</option>
                                    <option value="1">Daily</option>
                                    <option value="1">Monthly</option>
                                    <option value="1">Yearly</option>
                                    <option value="1">Projectly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                    Gaji</label>
                                <textarea class="form-control form-control-solid" placeholder="" rows="5" name="info_gaji" id="info_gaji" />  </textarea>
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
                                    (Yen)</label>
                                <div class="input-group mb-5">
                                    <span class="input-group-text">¥</span>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                    Tunjangan</label>
                                <textarea rows="5" name="info_tunjangan" id="info_tunjangan" />  </textarea>
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
    </script>
@endpush
