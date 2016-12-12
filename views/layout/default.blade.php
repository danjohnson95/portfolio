<!doctype html>
<html>
	<head>
		<title>@yield('title', 'Dan Johnson')</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="/css/default.css">
	</head>

	<body>

		<div id="topbar">
			<div class="container">
				<div class="row align-center">

					<div class="column shrink">
						<div class="me-img">
							<img src="/img/me.jpeg">
						</div>
						<div class="title">
							<h1>Dan Johnson</h1>
							<h2>Full Stack Web Developer</h2>
							<small>with 3 years commercial experience</small>
						</div>
					</div>

				</div>

				<div class="row align-center">
					<nav id="sticky-nav">
						<a href="/projects" class="{{$_page == "projects" ? "active" : ""}}" data-page="projects">
							<li>Projects</li>
						</a>
						<a href="/me" class="{{$_page == "me" ? "active" : ""}}" data-page="me">
							<li>About</li>
						</a>
						<a href="/contact" class="{{$_page == "contact" ? "active" : ""}}" data-page="contact">
							<li>Contact</li>
						</a>
						<a href="https://github.com/danjohnson95" target="_blank">
							<li>
								<img src="/img/github.svg">
							</li>
						</a>
						<a href="http://stackoverflow.com/users/story/2719424" target="_blank">
							<li>
								<img src="/img/stack-overflow.svg">
							</li>
						</a>
						<a href="https://uk.linkedin.com/in/danieljohnson95" target="_blank">
							<li>
								<img src="/img/linkedin.svg">
							</li>
						</a>
					</nav>
				</div>
			</div>
		</div>

		{{--<div id="topbar">
			<div class="container">
				<div class="row">
					<div class="column">
						<span>Dan Johnson</span>
					</div>
					<div class="column shrink">
						<nav>
							<a href="/projects" class="{{$_page == "projects" ? "active" : ""}}" data-page="projects">
								<li>Projects</li>
							</a>
							<a href="/me" class="{{$_page == "me" ? "active" : ""}}" data-page="me">
								<li>About Me</li>
							</a>
							<a href="/contact" class="{{$_page == "contact" ? "active" : ""}}" data-page="contact">
								<li>Contact</li>
							</a>
							<a href="https://github.com/danjohnson95" target="_blank">
								<li>GitHub</li>
							</a>
							<a href="http://stackoverflow.com/users/story/2719424" target="_blank">
								<li>StackOverflow</li>
							</a>
							<a href="https://uk.linkedin.com/in/danieljohnson95" target="_blank">
								<li>LinkedIn</li>
							</a>
						</nav>
					</div>
				</div>
			</div>
		</div>--}}

		<div class="container">
			<div id="content" data-page="{{$_page}}">
				<div class="inner-content">
					@yield('content')
				</div>
			</div>
		</div>

		<div class="container">
			<footer>
				&copy; Dan Johnson {{date('Y')}}
			</footer>
		</div>

		<script src="/js/default.js"></script>

<script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-38468493-6', 'auto');   ga('send', 'pageview');  </script>

		{{--<div class="gitbar">
			<div class="top">
				Gitbar
			</div>

			<table>
				<tr>
					<td>Current Branch</td>
					<td><strong>bugfix/d9567</strong></td>
				</tr>
				<tr>
					<td>Last Commit</td>
					<td><strong>#38t25fa</strong><small>6 minutes ago</small></td>
				</tr>
				<tr>
					<td>Checkout</td>
					<td>
						<select>
							<option>bugfix/d9567</option>
						</select>
					</td>
				</tr>
			</table>
		</div>--}}
	</body>
</html>
