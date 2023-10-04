@extends('layouts.default')

@section('content')
    <!-- 4-blocks row start -->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10 dashboard-header">
        <div class="col-lg-12 col-md-12">
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <form action="{{ route('admin.add.users') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex">

                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Foto Profil</label>
                                    <input name="image" type="file" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Nama Lengkap</label>
                                    <input name="name" type="text" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Nomor Telepon</label>
                                    <input name="nomor_telepon" type="text" class="form-control form-control-solid"
                                        placeholder="+62xxxxx" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                    <input name="email" type="email" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Role User</label>
                                    <select name="role" class="form-select form-select-solid" aria-label="Select example"
                                        data-control="select2">
                                        <option>Pilih Role</option>
                                        <option value="1">User</option>
                                        <option value="2">Employeer</option>
                                        <option value="3">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label for="exampleFormControlInput1" class="required form-label">Password</label>
                                    <input name="password" type="password" class="form-control form-control-solid"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5">
                                    <button class="btn btn-primary btn-md" type="submit">Create User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->
@endsection
