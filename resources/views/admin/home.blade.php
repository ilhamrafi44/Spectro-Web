@extends('layouts.default')

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
                <span>Pekerjaan Dilamat</span>
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
