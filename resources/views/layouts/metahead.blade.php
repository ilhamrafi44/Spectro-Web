<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>Spectro
        @if (Auth::check())
            |
            {{ Auth::user()->role == '3' ? 'Admin' : '' }}
            {{ Auth::user()->role == '2' ? 'Employeer' : '' }}
            {{ Auth::user()->role == '1' ? 'User' : '' }}
            {{ $page_name }}
        @endif
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="Spectro.id" />
    <meta name="keywords" content="spectro" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Spectro.id" />
    <meta property="og:url" content="https://spectro.id" />
    <meta property="og:site_name" content="Spectro.id" />
    <link rel="shortcut icon" href="{{ asset('assets/media/spectro-small.png') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--end::Global Stylesheets Bundle-->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
