<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <title>Login | Tax Hut </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('corenav-master/coreNavigation-1.1.3.css') }}">


    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

    <style>
        .theme-primary .btn-yellow {
            background-color: #ffcb00;
            border-color: #ffcb00;
            color: #000000;
        }

        .form-control,
        .form-select {
            border-color: #131314;
        }

        .input-group .input-group-text {
            border-color: #000000;
            background-color: #fccd63;
        }

    </style>

</head>

<body class="hold-transition theme-primary bg-img"
    style="background-image: url({{ asset('img/air_support.png') }}) ; background-position: center;">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary"></h2>
                                <p class="mb-0"></p>
                                <a href="{{ url('/') }}" class="brand">
                                    <img src="{{ asset('img/logo.png') }}" alt="" style="width: 40%" />
                                </a>
                            </div>
                            <div class="p-40">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text "><i class="ti-user"></i></span>
                                            <input type="email"
                                                class="form-control ps-15 bg-transparent @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text "><i class="ti-lock"></i></span>
                                            <input type="password" name="password"
                                                class="form-control ps-15 bg-transparent  @error('password') is-invalid @enderror"
                                                placeholder="Password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" type="checkbox" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="fog-pwd text-end">
                                                <a href="javascript:void(0)" class="hover-warning"><i
                                                        class="ion ion-locked"></i> Forgot password?</a><br>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit"
                                                class="btn btn-yellow btn-sm mt-10 pull-right">Login</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Don't have an account? <a
                                            href="{{ route('register') }}" class="text-warning ms-5">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

</body>

</html>
