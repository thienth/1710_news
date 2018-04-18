<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'T3h - PHP1710')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
	
	<header id="header" class="">
		Day la header
	</header><!-- /header -->
	<main>
		@yield('content')
	</main>
	<aside>
		Day la Aside
	</aside>
	<footer>
		Day la footer
	</footer>
	<script >
		console.log('chay tu layout')
	</script>
	@yield('js')
</body>
</html>