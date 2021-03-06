<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="robots" content="follow, index">

        <link href="/assets/imgs/favicon.ico" rel="icon" type="image/x-icon" />

		@yield('metas')

		{{ HTML::style('/assets/css/filmoteca.css') }}

		@yield('styles')
		<title>Filmoteca UNAM</title>
	</head>

	<body>
		@include('layouts.header')

		<div class="container-fluid">
			<div class="row">
				<div class="sidebar col-sm-3">
					@yield('sidebar')
				</div>
				<div class="content col-sm-9">
					@yield('content')
				</div>
			</div>
		</div>

		@include('layouts.footer')

        @include('elements.google-tag-manager')

        @yield('default-scripts', HTML::scripts([
            '/bower_components/jquery/dist/jquery.min.js',
            '/bower_components/bootstrap/dist/js/bootstrap.min.js',
            '/bower_components/slick.js/slick/slick.min.js'
            ]))

        @yield('scripts')

    </body>
</html>
