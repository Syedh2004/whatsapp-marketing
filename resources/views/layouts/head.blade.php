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
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
<!-- Scripts -->
{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

