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

    <title>@yield('title') Tax Hut - Support</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('corenav-master/coreNavigation-1.1.3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">
    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

    @yield('style')

    <style>
        nav .brand {
            padding: 8px 8px !important;
        }

        .theme-primary a:hover,
        .theme-primary a:active,
        .theme-primary a:focus {
            color: #eeee10 !important;
        }

        .theme-primary .btn-primary {
            background-color: #080808;
            border-color: #000000;
            color: #ffffff;
        }

        .theme-primary .btn-primary:hover,
        .theme-primary .btn-primary:active,
        .theme-primary .btn-primary:focus,
        .theme-primary .btn-primary.active {
            background-color: #fff64c !important;
            border-color: #fff64c !important;
            color: #040404 !important;
        }

        .bg-dark3 {
            background-color: #080808 !important;
            color: #ffffff !important;
        }

        .category .card:hover .card-body {
            background: #ffc50087;
            cursor: pointer;
        }

        .bg-yellow {
            background-color: #ffc300 !important;
            color: #ffffff;
        }

    </style>
</head>

<body class="theme-primary">

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    @include('inc.frontHeader')

    @yield('content')

    @include('inc.frontFooter')

    <a href="{{ route('contact') }}" class="float">
        <i class="fa fa-envelope my-float"></i>
        <span class="fs-14">Contact Us</span>
    </a>

    <!-- Vendor JS -->
    <script src="{{ asset('js/vendors.min.js') }}" defer></script>
    <!-- Corenav Master JavaScript -->
    <script src="{{ asset('corenav-master/coreNavigation-1.1.3.js') }}" defer></script>
    <script src="{{ asset('js/nav.js') }}" defer></script>


    <script src="{{ asset('js/template.js') }}" defer></script>


    @yield('script')

    <style>
        .float {
            position: fixed;
            width: 120px;
            height: 35px;
            bottom: 40px;
            right: 40px;
            background-color: #000;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px rgb(72, 72, 72);
        }

        .my-float {
            margin-top: 12px;
        }

    </style>

</body>

</html>
