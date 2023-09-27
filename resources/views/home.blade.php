@extends('layouts.default')

@section('cucumber')
<div class="row">
    <div class="col-sm-12 p-0">
        <div class="main-header">
            <h4>Dashboard</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icofont icofont-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Spectro.id</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
    <!-- 4-blocks row start -->
    <div class="row dashboard-header">
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Dilihat</span>
                <h2 class="dashboard-total-products">4500</h2>
                <span class="label label-warning">Dilihat</span>Total Profil
                <div class="side-box">
                    <i class="ti-signal text-warning-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Ulasan</span>
                <h2 class="dashboard-total-products">37,500</h2>
                <span class="label label-primary">Ulasan</span>Total Profil
                <div class="side-box ">
                    <i class="ti-gift text-primary-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Pekerjaan Disimpan</span>
                <h2 class="dashboard-total-products"><span>30,780</span></h2>
                <span class="label label-success">Total Disimpan</span>Pekerjaan
                <div class="side-box">
                    <i class="ti-direction-alt text-success-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Pekerjaan Dilamar</span>
                <h2 class="dashboard-total-products"><span>30,780</span></h2>
                <span class="label label-danger">Total Dilamar</span>Pekerjaan
                <div class="side-box">
                    <i class="ti-rocket text-danger-color"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->
@endsection
