<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Editorial by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				@include('site.layout.header')
				<form action="">
					<div>
						<label name='nome' for="">Nome</label>
						<input type="text">
					</div>

					<div>
						<label name='email' for="">E-mail</label>
						<input type="email">
					</div>

					<div>
						<input type="submit">
					</div>
				</form>

				@yield('content')

			</div>
		</div>

		<!-- Sidebar -->
		@include('site.layout.Sidebar')

	</div>

	<!-- Scripts -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/browser.min.js')}}"></script>
	<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
	<script src="{{asset('assets/js/util.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>