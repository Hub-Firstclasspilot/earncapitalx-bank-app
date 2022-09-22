<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>EarndotFX - {{ $title ?? "" }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/plugins.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/blocks.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/widgets.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/theme-styles.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i,900," rel="stylesheet">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->
</head>

<body class="crumina-grid">

	<!-- Preloader -->

	<div id="hellopreloader">
		<div class="preloader">
			<svg width="135" height="140" fill="#fff">
				<rect width="15" height="120" y="10" rx="6">
					<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="120" x="30" y="10" rx="6">
					<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="140" x="60" rx="6">
					<animate attributeName="height" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="120" x="90" y="10" rx="6">
					<animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
				<rect width="15" height="120" x="120" y="10" rx="6">
					<animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="120;110;100;90;80;70;60;50;40;140;120" />
					<animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite" values="10;15;20;25;30;35;40;45;50;0;10" />
				</rect>
			</svg>

			<div class="text">Loading ...</div>
		</div>
	</div>

	<!-- ... end Preloader -->

    @yield('body')

    @include('sweetalert::alert')

	<script src="{{ asset('assets/front/js/method-assign.js') }}"></script>

	<!-- jQuery first, then Other JS. -->

	<script src="{{ asset('assets/front/js/jquery-3.3.1.min.js') }}"></script>

	<script src="{{ asset('assets/front/js/map-shortcode.js') }}"></script>

	<script src="{{ asset('assets/front/js/js-plugins/crum-mega-menu.js') }}"></script>
	<script src="{{ asset('assets/front/js/theme-plugins.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/ajax-pagination.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/material.min.js') }}"></script>
	<script src="{{ asset('assets/front/js/js-plugins/orbitlist.js') }}"></script>

	<script src="{{ asset('assets/front/js/js-plugins/bootstrap-datepicker.js') }}"></script><!-- FontAwesome 5.x.x JS -->

	<script defer src="{{ asset('assets/front/fonts/fontawesome-all.js') }}"></script>

	<script src="{{ asset('assets/front/js/main.js') }}"></script>

</body>

</html>

