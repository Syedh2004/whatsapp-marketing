<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes-pixeden.com/demos/glazzed/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2023 07:44:43 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Glazzed Admin Theme</title>

	<link rel="icon" sizes="192x192" href="{{ asset('assets/img/touch-icon.png') }}"/>
	<link rel="apple-touch-icon" href="{{ asset('assets/img/touch-icon-iphone.png') }}"/>
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/touch-icon-ipad.png') }}"/>
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/touch-icon-iphone-retina.png') }}"/>
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/touch-icon-ipad-retina.png') }}"/>

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.min.css') }}" />

	<!-- Pixeden Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-filled.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" />
</head>

<body>
	<div id="loading">
		<div class="loader loader-light loader-large"></div>
	</div>

	<div>
		<div class="col-md-12">
			<div class="error-wrap">
				<div class="error">
					<span>{{ $data['value'] }}</span>
				</div>
				<div class="error">
					<span>{{ $data['value'] }}</span>
				</div>
				<div class="error">
					<span>{{ $data['value'] }}</span>
				</div>
				<p>
					<a href="{{ $data['url'] }}">
                        <i class="pe-7s-home"></i>
                    </a>
                </p>
			</div>

		</div>
	</div>


	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/amcharts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/serial.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/amcharts/pie.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/chart.js') }}"></script>
</body>

<!-- Mirrored from themes-pixeden.com/demos/glazzed/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2023 07:44:43 GMT -->
</html>
