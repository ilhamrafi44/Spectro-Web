@extends('layouts.default')
@section('cucumber')
    <div class="row">
        <div class="col-sm-12 p-0">
            <div class="main-header">
                <h4>Edit Profile</h4>
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icofont icofont-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Spectro.id</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Edit Profile</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- 4-blocks row start -->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-block">
                    <div class="form-group row">
                        <div class="col-md-9">
                            <h1>Profil Saya</h1>
                            <label for="file" class="custom-file">
                                <input type="file" id="file" class="custom-file-input">
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="myprofile" class="form-control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="emailHelp" placeholder="Nama Lengkap">

                            </div>
                            <div class="form-group">
                                <label for="myprofile" class="form-control-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="emailHelp" placeholder="+628xxxxxxx">

                            </div>
                            <div class="form-group">
                                <label for="myprofile" class="form-control-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Email Anda">
                            </div>
                            <div class="form-group">
                                <label for="myprofile" class="form-control-label">Kota</label>
                                <input type="Text" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" placeholder="Email Anda">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-control-label">Jenis Kelamin</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>Laki - Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="myprofile" class="form-control-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="myprofile" class="form-control-label">Usia</label>
                                <input type="number" name="usia" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-control-label">Agama</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Budha</option>
                                    <option>Hindu</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            Form 2
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->
@endsection
