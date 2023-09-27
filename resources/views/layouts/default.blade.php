<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spectro</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('template/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <!--Date Picker Material Icon Css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Date Picker css -->
    <link rel="stylesheet"
        href="{{ asset('template/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" />
    <!-- Bootstrap Date-Picker css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css') }}" />
    <link rel="stylesheet"
        type="{{ asset('text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{ asset('template/assets/plugins/chartist/dist/chartist.css') }}" type="text/css"
        media="all">

    <!-- Weather css -->
    <link href="{{ asset('template/assets/css/svg-weather.css') }}" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/responsive.css') }}">

</head>

<div class="sidebar-mini fixed">
    <div class="wrapper">
        <div class="loader-bg">
            <div class="loader-bar">
            </div>
        </div>
        @include('layouts.navbar')
        @include('layouts.sidenav')
        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <!-- Row Starts -->
                @yield('cucumber')


                @yield('content')


            </div>
        </div>
    </div>
</div>

<!-- Required Jqurey -->
<script src="{{ asset('template/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('template/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('template/assets/plugins/tether/dist/js/tether.min.js') }}"></script>

<!-- Required Fremwork -->
<script src="{{ asset('template/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- waves effects.js -->
<script src="{{ asset('template/assets/plugins/Waves/waves.min.js') }}"></script>

<!-- Scrollbar JS-->
<script src="{{ asset('template/assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('template/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

<!--classic JS-->
<script src="{{ asset('template/assets/plugins/classie/classie.js') }}"></script>

<!-- notification -->
<script src="{{ asset('template/assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

<!-- custom js -->
<script type="text/javascript" src="{{ asset('template/assets/js/main.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/assets/pages/elements.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/assets/js/menu.min.js') }}"></script>

<script src="{{ asset('template/assets/plugins/datepicker/js/moment-with-locales.min.js') }}"></script>
<script
    src="{{ asset('template/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
</script>

   <!-- Bootstrap Datepicker js -->
   <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
   <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js') }}"></script>




</body>

</html>
