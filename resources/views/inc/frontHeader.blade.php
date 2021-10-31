    <header class="top-bar text-dark">
        <div class="topbar">

            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-12 d-lg-block d-none">
                        <div class="topbar-social text-center text-md-start topbar-left">
                            <ul class="list-inline d-md-flex d-inline-block">
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 xs-mb-10">
                        <div class="topbar-call text-center text-lg-end topbar-right">
                            <ul class="list-inline d-lg-flex justify-content-end">

                                @guest
                                    <li class="me-10 ps-10"><a href="{{ route('register') }}"><i
                                                class="text-dark fa fa-user d-md-inline-block d-none text-black"></i>
                                            Register</a></li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav hidden class="nav-dark nav-transparent">
            <div class="nav-header">
                <a href="{{ url('/') }}" class="brand">
                    <img src="{{ asset('img/logo.png') }}" alt="" />
                </a>
            </div>
            <ul class="menu">
                @auth
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </ul>
            <ul class="attributes">
                @auth
                    <li class="d-md-block d-none">
                        <a href="{{ route('login') }}" class="px-10 pt-15 pb-10">
                            <div class="btn btn-primary py-5">Dashboard</div>
                        </a>
                    </li>
                @else

                    @if (session('guest'))
                        <li class="d-md-block d-none">
                            <a href="{{ route('guest.dashboard') }}" class="px-10 pt-15 pb-10">
                                <div class="btn btn-primary py-5">Guest Dashboard</div>
                            </a>
                        </li>
                    @else
                        <li class="d-md-block d-none">
                            <a href="{{ route('login') }}" class="px-10 pt-15 pb-10">
                                <div class="btn btn-primary py-5">Login</div>
                            </a>
                        </li>
                    @endif

                @endauth

            </ul>
        </nav>
    </header>
