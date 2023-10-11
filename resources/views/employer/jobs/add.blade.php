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
                                    <label for="exampleFormControlInput1" class="required form-labe l">Lokasi
                                        Pekerjaan</label>
                                    <input name="location_id" type="text" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">URL Video Perkenalan</label>
                                    <input name="link" type="text" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Expired Date</label>
                                    <input name="expired_date" type="date" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Jobs Category</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="category_id">
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
                                        data-control="select2" name="industry_id">
                                        @foreach ($industry as $item_i)
                                            <option value="{{ $item_i->id }}">{{ $item_i->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Deskripsi
                                        Pekerjaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="deskripsi" id="deskripsi" />  </textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Jumlah
                                        Kandidat</label>
                                    <input name="jumlah_kandidat" type="text" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Jenis Kelamin</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="jenis_kelamin">
                                        <option value="semua">Semua</option>
                                        <option value="man">Laki - Laki</option>
                                        <option value="woman">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Pengalaman</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="experience">
                                        <option value="fresh">Fresh</option>
                                        <option value="1">1 Tahun</option>
                                        <option value="2">2 Tahun</option>
                                        <option value="3">3 Tahun</option>
                                        <option value="4">4 Tahun</option>
                                        <option value="5">5 Tahun</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Kualifikasi</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="kualifikasi">
                                        <option value="Certificate">Certificate</option>
                                        <option value="Associate Degree">Associate Degree</option>
                                        <option value="Bachelor Degree">Bachelor Degree</option>
                                        <option value="Master's Degree">Master's Degree</option>
                                        <option value="Doctorate Degree">Doctorate Degree</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Level Karir</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="career_level">
                                        <option value="Not Specified">Not Specified</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Officer">Officer</option>
                                        <option value="Student">Student</option>
                                        <option value="Executive">Executive</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-labe l">Job Tipe</label>
                                    <select class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2" name="job_type">
                                        <option value="Freelance">Freelance</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Internship">Internship</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Temporary">Temporary</option>
                                    </select>
                                </div>
                            </div>

                            <div class="separator mb-5">
                            </div>


                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Hari Libur</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="hari_libur"
                                        id="hari_libur" />  </textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Waktu
                                        Istirahat</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="waktu_istirahat"
                                        id="waktu_istirahat" />  </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Waktu
                                        Kerja</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="waktu_kerja"
                                        id="waktu_kerja" />  </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Catatan
                                        Pekerjaan</label>
                                    <textarea class="form-control form-control-solid" placeholder="" rows="5" name="catatan" id="catatan" />  </textarea>
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
                                    <input type="number" name="salary" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="required form-label">Tipe Gaji</label>
                                <select class="form-select form-select-solid" aria-label="Select example"
                                    data-control="select2" name="salary_type">
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
                                    <input type="number" name="total_tunjangan" class="form-control"
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
