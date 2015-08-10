<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/img/docs.ico" type="image/x-icon">
		<link rel="icon" href="/img/docs.ico" type="image/x-icon">

		@if (isset($currentManual))
			<title>
				HazzardWeb Docs -
				{{ config("docs.manual_names.$currentManual", $currentManual) }} {{ $currentVersion }} {{ $title }}
			</title>
		@else
			<title>HazzardWeb Docs</title>
		@endif

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ elixir('css/docs.css') }}">
	</head>
	<body>
		@yield('content')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ elixir('js/docs.js') }}"></script>
	</body>
</html>
