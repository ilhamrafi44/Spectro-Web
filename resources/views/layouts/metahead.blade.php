<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>Spectro |
        {{ Auth::user()->role == '3' ? 'Admin' : '' }}
        {{ Auth::user()->role == '2' ? 'Employeer' : '' }}
        {{ Auth::user()->role == '1' ? 'User' : '' }}
        {{ $page_name }}

    </title>
    <meta charset="utf-8" />
    <meta name="description" content="Spectro." />
    <meta name="keywords" content="spectro" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Oswald HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/products/oswald-html-pro" />
    <meta property="og:site_name" content="Keenthemes | Oswald HTML Free" />
    <link rel="canonical" href="https://preview.keenthemes.com/axel-html-free" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
