<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Styles -->
		<link href="{{ asset('css/site.css') }}" rel="stylesheet">
	</head>
	<body>

		<div>
			@yield('content')
		</div>

		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</body>

</html>
