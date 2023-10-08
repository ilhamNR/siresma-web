<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
   		<script src="{{ asset('js/app.js') }}"></script>

		<title>SIRESMA</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/Logo Siresma_2-01.svg" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		{{-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/animate/animate.compat.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css"> --}}

		<!-- Theme CSS -->
		{{-- <link rel="stylesheet" href="css/theme.css"> --}}
		{{-- <link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css"> --}}

		<!-- Revolution Slider CSS -->
		{{-- <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css"> --}}
		{{-- <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css"> --}}

		<!-- Demo CSS -->
		{{-- <link rel="stylesheet" href="css/demos/demo-digital-agency.css"> --}}

		<!-- Skin CSS -->
		{{-- <link id="skinCSS" rel="stylesheet" href="css/skins/skin-digital-agency.css"> --}}

		<!-- Theme Custom CSS -->
		{{-- <link rel="stylesheet" href="css/custom.css"> --}}

		<!-- Head Libs -->
		{{-- <script src="vendor/modernizr/modernizr.min.js"></script> --}}
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
	</head>
	<body>

		<div class="body">
            @include('public.components.header')

			@yield('content')

            @include('public.components.footer')
		</div>

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>
