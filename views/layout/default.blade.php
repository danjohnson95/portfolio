<!doctype html>
<html>
	<head>
		<title>@yield('title', 'Dan Johnson')</title>
		<link rel="stylesheet" href="/css/default.css">
	</head>

	<body>

		<div class="container">
			@include('sidebar')
			<div id="content" data-page="{{$_page}}">
				<div class="inner-content">
					@yield('content')
				</div>
			</div>
		</div>

		<script src="/js/default.js"></script>

	</body>
</html>