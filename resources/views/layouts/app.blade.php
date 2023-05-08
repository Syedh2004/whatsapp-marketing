<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')

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

                        @include('layouts.navbar')

                    </aside>
                @endif
            {{-- End Side Bar --}}
            <section class="content">
                @yield('content')
            </section>
            @if( Auth::check() )
                @include('layouts.footer')
            @endif
        </div>
    </div>
	{{-- <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('assets/js/amcharts/amcharts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/serial.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/pie.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/chart.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
        $(window).load(function() {
            $("#loading").fadeOut(1000);
        });
    </script>
    @stack('page-script')
</body>
</html>
