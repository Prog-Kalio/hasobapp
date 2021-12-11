<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hasob App') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('head')
	
	<style type="text/css">
        * {
			padding: 0;
			margin:  0;
		}

		.comtainer-fluid {
			width: 99%;
			margin: auto;
			min-height: 100vh;
            background-color: midnightblue;
		}
    </style>
</head>
<body>
<div class="container-fluid">
		@include('nav')


		<div>
			@yield('content')
		</div>





		@include('footer')
	</div>
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

