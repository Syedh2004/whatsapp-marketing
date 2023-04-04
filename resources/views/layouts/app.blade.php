<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Whats App Marketing') }}</title>

    <link rel="icon" sizes="192x192" href="{{ asset('assets/img/touch-icon.png') }}" />
	<link rel="apple-touch-icon" href="{{ asset('assets/img/touch-icon-iphone.png') }}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/touch-icon-ipad.png')}}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/touch-icon-iphone-retina.png')}}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/touch-icon-ipad-retina.png')}}" />

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.min.css') }}">

	<!-- Pixeden Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-filled.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @stack('page-style')
</head>
<body>
    <div id="app">
        <div id="loading">
            <div class="loader loader-light loader-large"></div>
        </div>
        {{-- Header --}}
            @if( Auth::check() )
                <header class="top-bar">

                    <ul class="profile">
                        <li>
                            <a href="#" class="btn-circle no-circle">
                                <i class="pe-7f-back"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="return false;" class="btn-circle btn-sm">
                                <i class="pe-7f-mail"></i>
                                <span class="badge badge--blue">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="return false;" class="btn-circle btn-sm">
                                <i class="pe-7g-sets"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="return false;" class="btn-circle btn-sm active">
                                <i class="pe-7g-user"></i>
                            </a>
                        </li>
                        <li class="mobile-nav">
                            <a href="#" onclick="return false;" class="btn-circle btn-sm">
                                <i class="pe-7f-menu"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="main-brand">
                        <div class="main-brand__container">
                            <div class="main-logo">
                                <img src="{{ asset('assets/img/logo.png') }}" />
                            </div>
                        </div>
                    </div>

                </header>
            @endif
        {{-- End Header --}}

        <div class="wrapper">
            {{-- Side Bar --}}
                @if( Auth::check() )
                    <aside class="sidebar">

                        <div class="user-info">
                            <figure class="rounded-image profile__img">
                                <img
                                    class="media-object user-xzt" src="
                                    @if ( Auth::user()->user_image != null )
                                        {{ asset('assets/img/user/' . Auth::user()->user_image) }}
                                    @else
                                        {{ asset('assets/img/user/default.jpg') }}
                                    @endif
                                    " alt="{{ Auth::user()->name }}" />
                            </figure>

                            <h2 class="user-info__name">{{ Auth::user()->name; }}</h2>
                            <h3 class="user-info__role">{{ Auth::user()->email; }}</h3>
                        </div>

                        <ul class="main-nav">
                            <li class="main-nav--active">
                                <a class="main-nav__link" href="/">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-home"></i>
                                    </span>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="main-nav__link" href="/">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-edit"></i>
                                    </span>
                                    All Users
                                </a>
                            </li>
                            <li class="main-nav--collapsible">
                                <a class="main-nav__link" href="#" onclick="return false;">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-monitor"></i>
                                    </span>
                                    Sample pages <span class="badge badge--line badge--blue">2</span>
                                </a>
                                <ul class="main-nav__submenu">
                                    <li>
                                        <a href="404.html">
                                            <span>Error 404</span></a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                            <span>Login</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="main-nav__link" href="grid.html">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-browser"></i>
                                    </span>
                                    Grid Layout
                                </a>
                            </li>
                            <li>
                                <a class="main-nav__link" href="tables.html">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-note"></i>
                                    </span>
                                    Tables &amp; forms
                                </a>
                            </li>
                            <li>
                                <a class="main-nav__link" href="stats.html">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-graph3"></i>
                                    </span>
                                    Statistics
                                </a>
                            </li>
                            <li>
                                <a
                                    class="main-nav__link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="main-nav__icon">
                                        <i class="pe-7f-user"></i>
                                    </span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    Logout
                                </a>
                            </li>
                        </ul>

                    </aside>
                @endif
            {{-- End Side Bar --}}
            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/amcharts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/serial.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/pie.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/chart.js') }}"></script>
</body>
</html>
