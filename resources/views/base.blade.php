<!doctype html>
<html>
<head>
	<title>lodyblog - @yield('title')</title>
	<link rel="stylesheet" type="text/css"
	href="/bower_components/tether/dist/css/tether.min.css">
	<link rel="stylesheet" type="text/css"
	href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	@yield('styles')
</head>
<body>
<div class="container">
	<header class="row">
		<div class="col-lg-12">
			<?xml version="1.0" encoding="UTF-8" standalone="no"?>
			<svg id="lodyb" onclick="window.location = '/'" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" viewBox="0 0 160 143.48111">
				<metadata id="metadata7">
				<rdf:RDF>
				<cc:Work rdf:about="">
				<dc:format>image/svg+xml</dc:format>
				<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
				<dc:title/>
				</cc:Work>
				</rdf:RDF>
				</metadata>
				<g id="layer1" fill-rule="evenodd" transform="translate(0 -540.36)">
					<path id="left" d="m0 52.176l80 91.304v-52.173l-34.285-39.131h-45.715z" transform="translate(0 540.36)" fill="#c8c8c8"/>
					<path id="top" d="m0 540.36v52.175h160v-52.175l-80 91.31-80-91.31z" fill="#ebebeb"/>
					<path id="right" d="m160 592.54-80 91.305v-52.174l34.285-39.131h45.715z" fill="#9b9b9b"/>
				</g>
			</svg>
		</div>
	</header>
	<main class="row">
		<div class="col-lg-12">
			@yield('content')
		</div>
	</main>
	<footer class="row">
		<div class="col-lg-12">
			<p class="footer-text">all rights reserved</p>
		</div>
	</footer>
</div>
	<script type="text/javascript"
	src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript"
	src="/bower_components/tether/dist/js/tether.min.js"></script>
	<script type="text/javascript"
	src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	@yield('scripts')
</body>
</html>