<!doctype html>
<html>
<head>
	<title>lodyblog - @yield('title')</title>
	<link rel="stylesheet" type="text/css"
	href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	@yield('styles')
</head>
<body>

	@yield('content')

	<script type="text/javascript"
	src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript"
	src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	@yield('scripts')
</body>
</html>