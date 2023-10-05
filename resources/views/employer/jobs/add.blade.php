@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <form action="{{ route('employer.jobs.add') }}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 mb-10">
                <!--begin::Accordion-->
                <!--end::Accordion-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">My Profile </h4>
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
                                    <label for="exampleFormControlInput1" class="required form-labe l">Nama Pekerjaan</label>
                                    <input name="text" type="text" class="form-control form-control-solid"
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
                        <h4 class="w-bolder mb-5">Media Sosial </h4>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Instagram</label>
                                <input name="instagram" type="text" class="form-control form-control-solid"
                                    placeholder="spectro.id" value="{{ Auth::user()->b_inggris }}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Youtube</label>
                                <input name="youtube" type="text" class="form-control form-control-solid"
                                    placeholder="https://www.youtube.com/channels/spectro.id"
                                    value="{{ Auth::user()->b_jepang }}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Twitter</label>
                                <input name="twitter" type="text" class="form-control form-control-solid"
                                    placeholder="@spectro.id" value="{{ Auth::user()->tempat_belajar }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">Lokasi Perusahaan </h4>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Negara</label>
                                <input name="negara" type="text" class="form-control form-control-solid"
                                    placeholder="Indonesia" value="{{ Auth::user()->sertifikat_lainnya }}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Alamat</label>
                                <input name="alamat" type="text" class="form-control form-control-solid"
                                    placeholder="DKI Jakarta, Jakarta Selatan, Pondok Indah No.1"
                                    value="{{ Auth::user()->kota }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-spectro">Simpan / Update</button>
        </div>
    </form>
@endsection
