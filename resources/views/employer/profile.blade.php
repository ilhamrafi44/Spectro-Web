@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <!--begin::Faq main-->
    <form action="{{ route('employer_profile_store') }}" method="POST" enctype="multipart/form-data" id="form_profile">
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

                                @if ($profile->file_sampul_id == null)
                                    <img src="/assets/media/banner-default.jpg" alt="" class="card-img-top"
                                        height="200px">
                                @else
                                    <img src="/storage/file/images/employer/{{ $profile->file_sampul_id }}" alt=""
                                        class="card-img-top" height="200px">
                                @endif



                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="symbol symbol-160px symbol-lg-160px symbol-fixed shadow mb-5"
                                                style="margin-top: -100%;">
                                                @if ($profile->file_logo_id == null)
                                                    <img src="/assets/media/employer-avatar.jpg" alt=""
                                                        height="300px">
                                                @else
                                                    <img src="/storage/file/images/employer/{{ $profile->file_logo_id }}"
                                                        alt="" height="300px">
                                                @endif

                                            </div>
                                            <div class="container">
                                                <h1 class="w-bold ">{{ $data->name }}
                                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </h1>

                                                <p>
                                                    {{ $profile->deskripsi }}
                                                </p>

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="container">
                                                <div class="row d-flex">
                                                    <div class="col-md-6 fs-5 mb-5">
                                                        <a><i class="fa-solid fa-location-dot"></i> <b>Lokasi : </b></a>
                                                        {{ $profile->negara }}, {{ $profile->kota }}
                                                    </div>
                                                    <div class="col-md-6 fs-5 mb-5">
                                                        <a><i class="fa-solid fa-calendar-days"></i> <b>Berdiri Sejak :
                                                            </b></a>
                                                        {{ $profile->tahun_pendirian }}
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
                                    <label for="exampleFormControlInput1" class="required form-label">Foto
                                        Profile</label><br>
                                    <input name="foto_profile" type="file" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
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
                                    <label for="exampleFormControlInput1" class="required form-label">Sampul
                                        Banner</label><br>
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
                                    <label for="exampleFormControlInput1" class="required form-label">Nomor
                                        Telepon</label>
                                    <input name="no_tlp" type="text" class="form-control form-control-solid"
                                        placeholder="62" value="{{ Auth::user()->nomor_telepon }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Situs Web</label>
                                    <input name="situs_web" type="text" class="form-control form-control-solid"
                                        placeholder="https://" value="{{ $profile->situs_web }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Tahun
                                        Pendirian</label>
                                    <input name="tahun_pendirian" type="text" class="form-control form-control-solid"
                                        placeholder="1945" value="{{ $profile->tahun_pendirian }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Ukuran
                                        Perusahaan</label>
                                    <input name="ukuran_perusahaan" type="text"
                                        class="form-control form-control-solid" placeholder=""
                                        value="{{ $profile->ukuran_perusahaan }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Kategori
                                        Perusahaan</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="kategori_perusahaan">
                                        <option>Pilih</option>
                                        <option value="{{ $profile->kategori_perusahaan }}" selected>
                                            {{ $profile->kategori_perusahaan }}</option>
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
                                        placeholder="" value="{{ $profile->url_video }}" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                        Perusahaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="deskripsi" />  {{ $profile->deskripsi }} </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Negara</label>
                                    <input name="negara" type="text" class="form-control form-control-solid"
                                        placeholder="Indonesia" value="{{ $profile->negara }}" form="form_profile" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Alamat</label>
                                    <input name="alamat" type="text" class="form-control form-control-solid"
                                        placeholder="DKI Jakarta, Jakarta Selatan, Pondok Indah No.1" value="{{ $profile->alamat }}"
                                        form="form_profile" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-spectro" form="form_profile">Simpan / Update</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>


    <div class="col-md-12 mb-10">
        <div class="card">
            <div class="card-body">
                <h4 class="w-bolder mb-5">Media Sosial </h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                    Tambah +
                </button>
                <div class="table-responsive mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th scope="col">#</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">URL</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile->social_media as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td><a href="{{ route('employer.sosmed.delete', ['id' => $item->id]) }}"
                                            class="btn btn-icon btn-spectro btn-sm"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <button type="button" class="btn btn-sm btn-icon btn-warning"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_update{{ $loop->iteration }}"><i
                                                class="far fa-solid fa-pen text-white"></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" tabindex="-1" id="kt_modal_update{{ $loop->iteration }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('employer.sosmed.update') }}" method="POST">
                                                @csrf

                                                <input type="hidden" value="{{ $item->id }}" name="id">

                                                <div class="modal-header">
                                                    <h3 class="modal-title">Update Social Media</h3>

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
                                                                    class="required form-label">Jenis</label>
                                                                <select class="form-select form-select-solid"
                                                                    aria-label="Select example" data-control="select2"
                                                                    name="jenis" id="select2">
                                                                    <option value="{{ $item->jenis }}" selected>
                                                                        {{ $item->jenis }}</option>
                                                                    <option value="Instagram">Instagram</option>
                                                                    <option value="Facebook">Facebook</option>
                                                                    <option value="LinkedIn">LinkedIn</option>
                                                                    <option value="Discord">Discord</option>
                                                                    <option value="Twitter">Twitter</option>
                                                                    <option value="Dribbble">Dribbble</option>
                                                                    <option value="Tumblr">Tumblr</option>
                                                                    <option value="TikTok">TikTok</option>
                                                                    <option value="Telegram">Telegram</option>
                                                                    <option value="Pinterest">Pinterest</option>
                                                                    <option value="Youtube">Youtube</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-5">
                                                                <label for="exampleFormControlInput1"
                                                                    class="required form-label">URL</label>
                                                                <input name="link" type="text"
                                                                    class="form-control form-control-solid"
                                                                    value="{{ $item->link }}" />
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-10">
        <div class="card">
            <div class="card-body">
                <h4 class="w-bolder mb-5">Anggota / Karyawan</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
                    Tambah +
                </button>
                <div class="table-responsive mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Detail</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile->karyawan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>

                                        <!--begin::Accordion-->
                                        <div class="accordion accordion-icon-toggle"
                                            id="kt_accordion_{{ $loop->iteration }}">
                                            <!--begin::Item-->
                                            <div class="mb-5">
                                                <!--begin::Header-->
                                                <div class="accordion-header py-3 d-flex collapsed"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#kt_accordion_{{ $loop->iteration }}_item_1">
                                                    <span class="accordion-icon">
                                                        <i class="ki-duotone ki-arrow-right fs-4"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                    <h3 class="fs-4 fw-semibold mb-0 ms-4">Lihat Detail</h3>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div id="kt_accordion_{{ $loop->iteration }}_item_1"
                                                    class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                                                    <div class="table-responsive mt-5">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td>{{ $item->nama }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jabatan</td>
                                                                    <td>{{ $item->jabatan }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pengalaman</td>
                                                                    <td>{{ $item->pengalaman }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>{{ $item->email }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Item-->
                                    </td>

                                    <td><a href="{{ route('employer.karyawan.delete', ['id' => $item->id]) }}"
                                            class="btn btn-icon btn-spectro btn-sm"><i
                                                class="far fa-solid fa-trash text-white"></i></a>
                                        <button type="button" class="btn btn-sm btn-icon btn-warning"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_karyawan_update{{ $loop->iteration }}"><i
                                                class="far fa-solid fa-pen text-white"></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" tabindex="-1" id="kt_modal_karyawan_update{{ $loop->iteration }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('employer.karyawan.update') }}" method="POST">
                                                @csrf

                                                <input type="hidden" value="{{ $item->id }}" name="id">

                                                <div class="modal-header">
                                                    <h3 class="modal-title">Update Data Karyawan</h3>

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
                                                                    class="required form-label">Nama</label>
                                                                <input name="nama" type="text"
                                                                    class="form-control form-control-solid"
                                                                    value="{{ $item->nama }}" />
                                                            </div>
                                                            <div class="mb-5">
                                                                <label for="exampleFormControlInput1"
                                                                    class="required form-label">Jabatan</label>
                                                                <input name="jabatan" type="text"
                                                                    class="form-control form-control-solid"
                                                                    value="{{ $item->jabatan }}" />
                                                            </div>
                                                            <div class="mb-5">
                                                                <label for="exampleFormControlInput1"
                                                                    class="required form-label">Pengalaman</label>
                                                                <input name="pengalaman" type="text"
                                                                    class="form-control form-control-solid"
                                                                    value="{{ $item->pengalaman }}" />
                                                            </div>
                                                            <div class="mb-5">
                                                                <label for="exampleFormControlInput1"
                                                                    class="required form-label">Email</label>
                                                                <input name="email" type="text"
                                                                    class="form-control form-control-solid"
                                                                    value="{{ $item->email }}" />
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('employer.sosmed.add') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h3 class="modal-title">Tambah Social Media</h3>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">

                        <div class="row d-flex">

                            <div class="col-md-12">

                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jenis</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="jenis" id="select2">
                                        <option>Pilih</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Discord">Discord</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Dribbble">Dribbble</option>
                                        <option value="Tumblr">Tumblr</option>
                                        <option value="TikTok">TikTok</option>
                                        <option value="Telegram">Telegram</option>
                                        <option value="Pinterest">Pinterest</option>
                                        <option value="Youtube">Youtube</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">URL</label>
                                    <input name="link" type="text" class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal karyawan --}}

    <div class="modal modal-lg fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('employer.karyawan.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h3 class="modal-title">Tambah Anggota / Karyawan</h3>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">

                        <div class="row d-flex">

                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Nama</label>
                                    <input name="nama" type="text" class="form-control form-control-solid" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control form-control-solid" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Pengalaman</label>
                                    <input name="pengalaman" type="text" class="form-control form-control-solid" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                    <input name="email" type="text" class="form-control form-control-solid" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
