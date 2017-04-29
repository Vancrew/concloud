<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body style="margin-top: 80px">
	<header>
		@include('includes.header')
	</header>
	<div class="container">
		@yield('content')
	</div>

	<footer>
		@include('includes.footer')
	</footer>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>