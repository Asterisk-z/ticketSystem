<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') Tax Hut - Dashboard</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('corenav-master/coreNavigation-1.1.3.css') }}">


    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

    @yield('style')


    <style>
        .theme-primary a:hover,
        .theme-primary a:active,
        .theme-primary a:focus {
            color: #ffcb00;
        }

        #swal2-title {
            color: black !important;
        }

    </style>


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    @include('inc.backHeader')

    @include('inc.backSideNav')

    @yield('content')

    @include('inc.backFooter')


    <!-- Vendor JS -->
    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>

    <!--  App -->
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/pages/dashboard4.js') }}"></script>

    @yield('script')

</body>

</html>
