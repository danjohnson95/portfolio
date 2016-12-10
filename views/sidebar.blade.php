<div id="sidebar">

	<div class="row me-section">
		<div class="column shrink medium-12">
			<a href="/">
				<img src="/img/me.jpeg">
			</a>
		</div>
		<div class="column small-8 medium-12">
			<div class="name">
				Dan Johnson
				<small>Full Stack Web Developer
					<small>with {{$years_diff}} years commercial experience</small>
				</small>
			</div>
		</div>
	</div>

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

	<footer>
		&copy; Dan Johnson {{date('Y')}}
	</footer>

</div>