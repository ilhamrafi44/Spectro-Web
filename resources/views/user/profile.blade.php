@extends('layouts.default')

@section('content')
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content pb-0">
                        <!--begin::Faq main-->
                        <div class="row">
                            <div class="col-md-12 mb-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="w-bolder mb-5">My Profile </h4>
                                        <div class="row d-flex">
                                            <div class="col-md-12">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Foto Profil</label>
                                                    <input type="file" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Nama Lengkap</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Nomor Telepon</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="+62xxxxx"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Kota</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Jenis Kelamin</label>
                                                    <select class="form-select form-select-solid" aria-label="Select example" data-control="select2" >
                                                        <option>Pilih jenis kelamin</option>
                                                        <option value="1">Laki-Laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Tanggal Lahir</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Usia</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Agama</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Berat (Dalam KG)</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Tinggi Badan (Dalam CM)</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Jurusan</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="Example: Akunting"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Tinggi Badan (Dalam CM)</label>
                                                    <select class="form-select form-select-solid" aria-label="Select example" data-control="select2" >
                                                        <option>Pilih pendidikan terakhir</option>
                                                        <option value="1">Sekolah Menengah Atas / Sekolah Menengah Kejuruan</option>
                                                        <option value="2">Gelar Ahli Madya</option>
                                                        <option value="3">Gelar Sarjana</option>
                                                        <option value="4">Gelar Master</option>
                                                        <option value="5">Gelar Doktor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Bahasa yang Dikuasai</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check mb-5">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                                                                <label class="form-check-label" for="flexCheckDefault1">
                                                                    Inggris
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                                                                <label class="form-check-label" for="flexCheckDefault2">
                                                                    Jepang
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Skor Bahasa</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="Example: JFT A2 - 230, TOEFL - 600"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Tempat Belajar Bahasa</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="Example: Arka Learn"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sertifikat SSW</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="Example: Arka Learn"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Sertifikat Lainnya (Gino Jisshu, Kenshuu, dll)</label>
                                                    <input type="email" class="form-control form-control-solid" placeholder="Example: Gino Jisshu Metal Press"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Surat Izin Mengemudi</label>
                                                            <div class="form-check mb-5">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
                                                                <label class="form-check-label" for="flexCheckDefault3">
                                                                    Checklist Jika Punya
                                                                </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="w-bolder">Durasi Belajar Di Jepang </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Tahun</label>
                                                    <select class="form-select form-select-solid" aria-label="Select example" data-control="select2" >
                                                        <option>Pilih Berapa Tahun</option>
                                                        <option value="1">0 Tahun</option>
                                                        <option value="2">1 Tahun</option>
                                                        <option value="3">2 Tahun</option>
                                                        <option value="4">3 Tahun</option>
                                                        <option value="5">4 Tahun</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-5">
                                                    <label for="exampleFormControlInput1" class="required form-label">Bulan</label>
                                                    <select class="form-select form-select-solid" aria-label="Select example" data-control="select2" >
                                                        <option>Pilih Berapa Bulan</option>
                                                        <option value="1">0 Bulan</option>
                                                        <option value="2">1 Bulan</option>
                                                        <option value="3">2 Bulan</option>
                                                        <option value="4">3 Bulan</option>
                                                        <option value="5">4 Bulan</option>
                                                        <option value="1">5 Bulan</option>
                                                        <option value="2">6 Bulan</option>
                                                        <option value="3">7 Bulan</option>
                                                        <option value="4">8 Bulan</option>
                                                        <option value="5">9 Bulan</option>
                                                        <option value="1">10 Bulan</option>
                                                        <option value="2">11 Bulan</option>
                                                        <option value="3">12 Bulan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="w-bolder">Pengalaman Kerja </h4>
                                        <button type="button" class="btn btn-spectro mb-5" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                            + Tambah Pengalaman Kerja
                                        </button>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Jabatan</th>
                                                        <th>Tanggal</th>
                                                        <th>Perusahaan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Direktur</td>
                                                        <td>Jan 2021 - Feb 2023</td>
                                                        <td>PT. Attento Service</td>
                                                        <td> <a href="" class="btn btn-sm btn-danger"><i class="far fa-solid fa-trash text-white"></i></a>
                                                            <a href="" class="btn btn-sm btn-warning"><i class="far fa-solid fa-pen text-white"></i></a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Manajer</td>
                                                        <td>Feb 2023 - Sep 2023</td>
                                                        <td>PT. Apple Service</td>
                                                        <td><a href="" class="btn btn-sm btn-danger"><i class="far fa-solid fa-trash text-white"></i></a>
                                                            <a href="" class="btn btn-sm btn-warning"><i class="far fa-solid fa-pen text-white"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="modal fade" tabindex="-1" id="kt_modal_1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">Modal title</h3>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>Modal body text goes here.</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-spectro">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--end::Content-->
                <!--begin::Sidebar-->

            </div>
            <!--end::Faq main-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--end::App-->
@endsection
