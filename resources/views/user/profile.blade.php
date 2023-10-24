@extends('layouts.default')

@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content pb-0">
        <!--begin::Faq main-->
        <div class="row">
            <div class="col-md-12 mb-10">
                <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data"
                    id="form_profile">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h3 class="w-bolder mb-5">My Profile </h3>
                            <div class="row d-flex">
                                <div class="col-md-12">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Foto
                                            Profil</label>
                                        <input type="file" name="file_profile_id" class="form-control form-control-solid"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Nama
                                            Lengkap</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="name" value="{{ $data->name ?? '' }}"}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Nomor
                                            Telepon</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="62xxxxx"
                                            name="nomor_telepon" value="{{ $data->nomor_telepon ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                        <input type="email" class="form-control form-control-solid" placeholder=""
                                            name="email" value="{{ $data->email ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Kota</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="kota" value="{{ $profile->kota ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Jenis
                                            Kelamin</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            data-control="select2" name="jenis_kelamin">
                                            <option value="1" @if (isset($profile) && $profile->jenis_kelamin == 1) selected @endif>
                                                Laki-Laki</option>
                                            <option value="2" @if (isset($profile) && $profile->jenis_kelamin == 2) selected @endif>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Tanggal
                                            Lahir</label>
                                        <input type="date" class="form-control form-control-solid" placeholder=""
                                            name="tanggal_lahir" value="{{ $profile->tanggal_lahir ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Usia</label>
                                        <input type="number" class="form-control form-control-solid" placeholder=""
                                            name="usia" value="{{ $profile->usia ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Agama</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            data-control="select2" name="agama">
                                            <option value="">Pilih Agama</option>
                                            <option value="1" @if (isset($profile) && $profile->agama == 1) selected @endif>Islam
                                            </option>
                                            <option value="2" @if (isset($profile) && $profile->agama == 2) selected @endif>Kristen
                                            </option>
                                            <option value="3" @if (isset($profile) && $profile->agama == 3) selected @endif>Hindu
                                            </option>
                                            <option value="4" @if (isset($profile) && $profile->agama == 4) selected @endif>Budha
                                            </option>
                                            <option value="5" @if (isset($profile) && $profile->agama == 5) selected @endif>Lainnya
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Berat (Dalam
                                            KG)</label>
                                        <input type="number" class="form-control form-control-solid" placeholder=""
                                            name="berat_badan" value="{{ $profile->berat_badan ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Tinggi Badan
                                            (Dalam
                                            CM)</label>
                                        <input type="number" class="form-control form-control-solid" placeholder=""
                                            name="tinggi_badan" value="{{ $profile->tinggi_badan ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Jurusan</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Example: Akunting" name="jurusan"
                                            value="{{ $profile->jurusan ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Pendidikan
                                            Terakhir</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            data-control="select2" name="pendidikan_terakhir">
                                            <option value="">Pilih pendidikan terakhir</option>
                                            <option value="1" @if (isset($profile) && $profile->pendidikan_terakhir == 1) selected @endif>
                                                Sekolah Menengah Atas / Sekolah Menengah Kejuruan</option>
                                            <option value="2" @if (isset($profile) && $profile->pendidikan_terakhir == 2) selected @endif>Gelar
                                                Ahli Madya</option>
                                            <option value="3" @if (isset($profile) && $profile->pendidikan_terakhir == 3) selected @endif>Gelar
                                                Sarjana</option>
                                            <option value="4" @if (isset($profile) && $profile->pendidikan_terakhir == 4) selected @endif>
                                                Gelar
                                                Master</option>
                                            <option value="5" @if (isset($profile) && $profile->pendidikan_terakhir == 5) selected @endif>
                                                Gelar
                                                Doktor</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Bahasa yang
                                            Dikuasai</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-5">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckDefault1" name="b_inggris"
                                                        @if (isset($profile) && $profile->b_inggris) checked @endif />
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        Inggris
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        id="flexCheckDefault2" name="b_jepang"
                                                        @if (isset($profile) && $profile->b_jepang) checked @endif />
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
                                        <label for="exampleFormControlInput1" class="required form-label">Skor
                                            Bahasa</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Example: JFT A2 - 230, TOEFL - 600" name="skor_bahasa"
                                            value="{{ $profile->skor_bahasa ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Tempat Belajar
                                            Bahasa</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Example: Arka Learn" name="tempat_belajar"
                                            value="{{ $profile->tempat_belajar ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Sertifikat
                                            SSW</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Example: Arka Learn" name="sertifikat_ssw"
                                            value="{{ $profile->sertifikat_ssw ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Sertifikat
                                            Lainnya
                                            (Gino Jisshu, Kenshuu, dll)</label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Example: Gino Jisshu Metal Press" name="sertifikat_lainnya"
                                            value="{{ $profile->sertifikat_lainnya ?? '' }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Surat Izin
                                            Mengemudi</label>
                                        <div class="form-check mb-5">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault3"
                                                name="sim_mobil" @if (isset($profile) && $profile->sim_mobil) checked @endif />
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                Checklist Jika Punya
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="w-bolder mb-5">Pernah Bekerja Di Jepang? </h3>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Tahun</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            data-control="select2" name="total_tahun">
                                            <option @if (!isset($profile) || !$profile->total_tahun) selected @endif>Pilih Berapa Tahun
                                            </option>
                                            <option value="0" @if (isset($profile) && $profile->total_tahun == 0) selected @endif>0
                                                Tahun</option>
                                            <option value="1" @if (isset($profile) && $profile->total_tahun == 1) selected @endif>1
                                                Tahun</option>
                                            <option value="2" @if (isset($profile) && $profile->total_tahun == 2) selected @endif>2
                                                Tahun</option>
                                            <option value="3" @if (isset($profile) && $profile->total_tahun == 3) selected @endif>3
                                                Tahun</option>
                                            <option value="4" @if (isset($profile) && $profile->total_tahun == 4) selected @endif>4
                                                Tahun</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="required form-label">Bulan</label>
                                        <select class="form-select form-select-solid" aria-label="Select example"
                                            data-control="select2" name="total_bulan">
                                            <option value="">Pilih Berapa Bulan</option>
                                            <option value="0" @if (isset($profile) && $profile->total_bulan == 0) selected @endif>0
                                                Bulan
                                            </option>
                                            <option value="1" @if (isset($profile) && $profile->total_bulan == 1) selected @endif>1
                                                Bulan
                                            </option>
                                            <option value="2" @if (isset($profile) && $profile->total_bulan == 2) selected @endif>2
                                                Bulan
                                            </option>
                                            <option value="3" @if (isset($profile) && $profile->total_bulan == 3) selected @endif>3
                                                Bulan
                                            </option>
                                            <option value="4" @if (isset($profile) && $profile->total_bulan == 4) selected @endif>4
                                                Bulan
                                            </option>
                                            <option value="5" @if (isset($profile) && $profile->total_bulan == 5) selected @endif>5
                                                Bulan
                                            </option>
                                            <option value="6" @if (isset($profile) && $profile->total_bulan == 6) selected @endif>6
                                                Bulan
                                            </option>
                                            <option value="7" @if (isset($profile) && $profile->total_bulan == 7) selected @endif>7
                                                Bulan
                                            </option>
                                            <option value="8" @if (isset($profile) && $profile->total_bulan == 8) selected @endif>8
                                                Bulan
                                            </option>
                                            <option value="9" @if (isset($profile) && $profile->total_bulan == 9) selected @endif>9
                                                Bulan
                                            </option>
                                            <option value="10" @if (isset($profile) && $profile->total_bulan == 10) selected @endif>10
                                                Bulan
                                            </option>
                                            <option value="11" @if (isset($profile) && $profile->total_bulan == 11) selected @endif>11
                                                Bulan
                                            </option>
                                            <option value="12" @if (isset($profile) && $profile->total_bulan == 12) selected @endif>12
                                                Bulan
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 mb-10">
                <div class="card">
                    <div class="card-body">
                        <h4 class="w-bolder mb-5">Pengalaman Kerja</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_2">
                            Tambah +
                        </button>
                        <div class="table-responsive mt-5">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th scope="col">#</th>
                                        <th scope="col">Periode</th>
                                        <th scope="col">Perusahaan</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profile->pengalaman_kerja as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->nama_perusahaan }}</td>
                                            <td>{{ $item->jabatan }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-warning"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_pengalaman_update{{ $loop->iteration }}"><i
                                                        class="far fa-solid fa-pen text-white"></i></button>
                                                <a href="{{ route('user.pengalaman.delete', ['id' => $item->id]) }}"
                                                    class="btn btn-icon btn-spectro btn-sm"><i
                                                        class="far fa-solid fa-trash text-white"></i></a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" tabindex="-1"
                                            id="kt_modal_pengalaman_update{{ $loop->iteration }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('user.pengalaman.update') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{ $item->id }}"
                                                            name="id">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Update Pengalaman</h3>

                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i class="ki-duotone ki-cross fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row d-flex">
                                                                <div class="col-md-12">
                                                                    <div class="mb-5">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="required form-label">Periode</label>
                                                                        <input name="tanggal" type="text"
                                                                            class="form-control form-control-solid"
                                                                            value="{{ $item->tanggal }}" />
                                                                    </div>
                                                                    <div class="mb-5">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="required form-label">Perusahaan</label>
                                                                        <input name="nama_perusahaan" type="text"
                                                                            class="form-control form-control-solid"
                                                                            value="{{ $item->jabatan }}" />
                                                                    </div>
                                                                    <div class="mb-5">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="required form-label">Jabatan</label>
                                                                        <input name="jabatan" type="text"
                                                                            class="form-control form-control-solid"
                                                                            value="{{ $item->pengalaman }}" />
                                                                    </div>
                                                                    <div class="mb-5">
                                                                        <label for="exampleFormControlInput1"
                                                                            class="required form-label">Deskripsi</label>
                                                                        <textarea name="deskripsi" class="form-control form-control-solid" id="" cols="30" rows="10">{{ $item->deskripsi }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
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
                                            <td><a href="{{ route('user.sosmed.delete', ['id' => $item->id]) }}"
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
                                                    <form action="{{ route('user.sosmed.update') }}" method="POST">
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
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('user.sosmed.add') }}" method="POST">
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
    <div class="modal modal-lg fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('user.pengalaman.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h3 class="modal-title">Tambah Pengalaman Kerja</h3>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="required form-label">Periode</label>
                            <input name="tanggal" type="text" class="form-control form-control-solid" />
                        </div>
                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="required form-label">Perusahaan</label>
                            <input name="nama_perusahaan" type="text" class="form-control form-control-solid" />
                        </div>
                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="required form-label">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control form-control-solid" />
                        </div>
                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="required form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control form-control-solid" id="" cols="30" rows="10"></textarea>

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
