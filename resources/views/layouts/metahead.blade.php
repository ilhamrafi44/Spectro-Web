<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../" />
    <title>@php
        $website = \App\Models\Website::first();
        $nama_website = $website ? $website->nama_website : '';
        $deskripsi_website = $website ? $website->deskripsi_website : '';
        $tags_website = $website ? $website->tags_website : '';
    @endphp
        {{ $nama_website }}
        @if (Auth::check())
            |
            {{ Auth::user()->role == '3' ? 'Admin' : '' }}
            {{ Auth::user()->role == '2' ? 'Employeer' : '' }}
            {{ Auth::user()->role == '1' ? 'User' : '' }}
            {{ $page_name }}
        @endif
    </title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $deskripsi_website }}" />
    <meta name="keywords" content="{{ $tags_website }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $nama_website }}" />
    <meta property="og:url" content="https://spectro.id" />
    <meta property="og:site_name" content="{{ $nama_website }}" />
    @yield('seo')

    <link rel="shortcut icon" href="{{ asset('assets/media/spectro-small.png') }}" />
    <!-- Pemanggilan Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Torus&display=swap">

    <!-- Pemanggilan Stylesheet Global -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>

    <!-- Pemanggilan Stylesheet Eksternal -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Gaya Khusus -->
    <style>
        /* Gunakan font Torus pada elemen teks */
        body {
            font-family: 'Torus', sans-serif;
        }
    </style>

    <!-- Scripts -->
    <script>
        // Frame-busting untuk mencegah situs dimuat dalam bingkai tanpa izin (click-jacking)
        if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
