@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <form action="{{ route('employer_profile_store') }}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 mb-10">
                <!--begin::Accordion-->
                <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                    <!--begin::Item-->
                    <div class="mb-5">
                        <!--begin::Header-->
                        <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#profile">
                            <span class="accordion-icon">
                                <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Show My Current Profile</h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div id="profile" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                            <div class="card mb-5">
                                <img src="/storage/file/images/employer/{{ $data->file_cv_id }}" alt=""
                                    class="card-img-top" height="200px">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5"
                                                style="margin-top: -100%;">
                                                <img src="/storage/file/images/employer/{{ $data->file_profile_id }}"
                                                    alt="" height="300px">
                                            </div>
                                            <div class="container">
                                                <h1 class="w-bold ">{{ $data->name }}
                                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </h1>

                                                <p>
                                                    {{ $data->deskripsi }}
                                                </p>

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="container">
                                                <div class="row d-flex">
                                                    <div class="col-md-6 fs-5 mb-5">
                                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>
                                                        {{ $data->sertifikat_lainnya }}, {{ $data->kota }}
                                                    </div>
                                                    <div class="col-md-6 fs-5 mb-5">
                                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Berdiri Sejak :
                                                            </b></a>
                                                        {{ $data->usia }}
                                                    </div>
                                                    <div class="col-md-6 fs-5 mb-5">
                                                        <a><i class="fa-solid fa-envelope"></i> <b>Email : </b></a>
                                                        {{ $data->email }}
                                                    </div>
                                                    <div class="col-md-6 fs-5 mb-5">
                                                        <a><i class="fa-solid fa-phone"></i> <b>No Telepon : </b></a>
                                                        {{ $data->nomor_telepon }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Accordion-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">My Profile </h4>
                        <div class="row d-flex">
                            <div class="col-md-12">
                                <div class="mb-5">
                                    @csrf
                                    <label for="exampleFormControlInput1" class="required form-label">Logo
                                        Perusahaan</label><br>

                                    <input name="logo_perusahaan" type="file" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">

                                    <input name="foto_sampul" type="file" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Nama
                                        Perusahaan</label>
                                    <input name="nama" type="text" class="form-control form-control-solid"
                                        placeholder="" value="{{ Auth::user()->name }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                    <input name="email" type="email" class="form-control form-control-solid"
                                        placeholder="" value="{{ Auth::user()->email }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Nomor Telepon</label>
                                    <input name="no_tlp" type="text" class="form-control form-control-solid"
                                        placeholder="62" value="{{ Auth::user()->nomor_telepon }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Situs Web</label>
                                    <input name="situs_web" type="text" class="form-control form-control-solid"
                                        placeholder="https://" value="{{ Auth::user()->agama }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Tahun
                                        Pendirian</label>
                                    <input name="tahun_pendirian" type="text" class="form-control form-control-solid"
                                        placeholder="1945" value="{{ Auth::user()->usia }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Ukuran
                                        Perusahaan</label>
                                    <input name="ukuran_perusahaan" type="text"
                                        class="form-control form-control-solid" placeholder=""
                                        value="{{ Auth::user()->tinggi_badan }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Kategori
                                        Perusahaan</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="kategori_perusahaan">
                                        <option>Pilih</option>
                                        <option value="{{ Auth::user()->berat_badan }}" selected>
                                            {{ Auth::user()->tinggi_badan }}</option>
                                        <option value="1">Food Manufacture</option>
                                        <option value="2">Agriculture</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">URL Video
                                        Perkenalan</label>
                                    <input name="url_video" type="text" class="form-control form-control-solid"
                                        placeholder="" value="{{ Auth::user()->jurusan }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                        Perusahaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="deskripsi" />  {{ Auth::user()->deskripsi }} </textarea>
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
