@extends('layouts.default')

@section('content')
    <div class="row">
        <div class=" text-white">
            <form>
                <div class="row d-flex align-items-center">
                    @csrf
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <input type="text" name="name" value="{{ request()->get('name') }}"
                                class="form-control" placeholder="Keyword..">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5">
                            <select class="form-select" aria-label="Select example" data-control="select2"
                                name="employer_id">
                                <option value="">Cari Bedasarkan Employer</option>
                                @foreach ($employer as $emp)
                                    <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2"
                                name="job_id">
                                <option value="">Cari Bedasarkan Job</option>
                                @foreach ($data_job as $itemz)
                                    <option value="{{ $itemz->id }}">{{ $itemz->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2"
                                name="direction">
                                <option value="asc">Terlama</option>
                                <option value="desc">Terbaru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5 ">
                            <select class="form-select" aria-label="Select example" data-control="select2"
                                name="status">
                                <option value="">Status</option>
                                <option value="1">Pending</option>
                                <option value="2">Approved</option>
                                <option value="3">Rejected</option>
                                <option value="4">Canceled</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5">
                            <select class="form-select" aria-label="Select example" data-control="select2"
                                name="per_page">
                                <option value="10">10 Data Per Halaman</option>
                                <option value="50">50 Data Per Halaman</option>
                                <option value="100">100 Data Per Halaman</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-5">
                            <button class="btn btn-spectro" type="submit">Cari</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-auto mb-5   ">
                            <h3>Total Pelamar : {{ $data->count() }}</h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($data as $jobs)
                            <div class="card hover-elevate-up border parent-hover mb-5">
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="d-flex align-items-center">
                                            <h3> {{ $jobs->candidate->name }} - {{ $jobs->jobs->name }}</h3>
                                            <div class="d-flex ml-5">
                                                @if ($jobs->status == 1)
                                                    <div class="badge badge-warning fs-6 m-1">Pending</div>
                                                @elseif ($jobs->status == 2)
                                                    <div class="badge badge-success fs-6 m-1">Approved</div>
                                                @elseif ($jobs->status == 3)
                                                    <div class="badge badge-danger fs-6 m-1">Rejected</div>
                                                @elseif ($jobs->status == 4)
                                                    <div class="badge badge-danger fs-6 m-1">Canceled</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-auto mb-3">
                                            Melamar Pada :
                                            {{ \Carbon\Carbon::parse($jobs->created_at)->toFormattedDateString() }}
                                        </div>
                                        <div class="col-auto mb-3">
                                            <a class="text-spectro" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_pengalaman_update{{ $loop->iteration }}">Download
                                                Dokumen</a>

                                        </div>
                                        <div class="col-auto mb-3 ms-auto">
                                            <a href="{{ route('detai.candidate', ['id' => $jobs->candidate->id]) }}"
                                                class="btn btn-light btn-sm rounded-pill m-1">Lihat Profile</a>
                                            @if ($jobs->status == 1)
                                                <a class="btn btn-sm fs-8 btn-primary rounded-pill m-1"
                                                    href="{{ route('jobs.reject', ['id' => $jobs->id]) }}">Reject</a>
                                                <a class="btn btn-sm fs-8 btn-success rounded-pill m-1"
                                                    href="{{ route('jobs.approve', ['id' => $jobs->id]) }}">Approve</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" tabindex="-1" id="kt_modal_pengalaman_update{{ $loop->iteration }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">List Dokumen User/Candidate</h3>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                        class="path2"></span></i>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body">
                                            <div class="fs-3">{{ $jobs->candidate->name }}</div>
                                            <p>Terakhir Update : {{ $jobs->resume->updated_at }} </p>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tr class="bg-light">
                                                        <td>Nama File</td>
                                                        <td>File</td>
                                                    </tr>
                                                    <tr>
                                                        <td>File CV</td>
                                                        <td>
                                                            @if ($jobs->resume->cv_file == null)
                                                                Kosong
                                                            @else
                                                                <a target="_blank"
                                                                    href="/storage/file/user/resume/{{ $jobs->resume->cv_file }}"
                                                                    class="btn btn-light btn-sm" target="_blank">Lihat</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File Sertifikat Bahasa</td>
                                                        <td>
                                                            @if ($jobs->resume->language_certificate_file == null)
                                                                Kosong
                                                            @else
                                                                <a target="_blank"
                                                                    href="/storage/file/user/resume/{{ $jobs->resume->language_certificate_file }}"
                                                                    class="btn btn-sm btn-light">Lihat</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sertifikat SSW</td>
                                                        <td>
                                                            @if ($jobs->resume->ssw_certificate_file == null)
                                                                Kosong
                                                            @else
                                                                <a target="_blank"
                                                                    href="/storage/file/user/resume/{{ $jobs->resume->ssw_certificate_file }}"
                                                                    class="btn btn-sm btn-light">Lihat</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File Sertifikat Lainnya</td>
                                                        <td>
                                                            @if ($jobs->resume->other_certificate_file == null)
                                                                Kosong
                                                            @else
                                                                <a target="_blank"
                                                                    href="/storage/file/user/resume/{{ $jobs->resume->other_certificate_file }}"
                                                                    class="btn btn-sm btn-light">Lihat</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File SIM</td>
                                                        <td>
                                                            @if ($jobs->resume->driving_license_file == null)
                                                                Kosong
                                                            @else
                                                                <a target="_blank"
                                                                    href="/storage/file/user/resume/{{ $jobs->resume->driving_license_file }}"
                                                                    class="btn btn-sm btn-light">Lihat</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File Pasport</td>
                                                        <td>
                                                            @if ($jobs->resume->pasport_file == null)
                                                                Kosong
                                                            @else
                                                                <a target="_blank"
                                                                    href="/storage/file/user/resume/{{ $jobs->resume->pasport_file }}"
                                                                    class="btn btn-sm btn-light">Lihat</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if ($data->count() > 0)
                            <!-- Tampilkan link pagination -->
                            {{ $data->appends(request()->except('page'))->links() }}
                        @else
                            @include('layouts.data404')
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
