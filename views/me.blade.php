@extends('layout.default')

@section('content')

<div class="row align-top">
	<div class="column small-12 medium-8" id="about-me">
		<h1>About Me</h1>

		<p>
			Hi, I'm Dan and I'm a web developer with over three years experience in a range of web technologies.

		</p>

		<p>
			I'm a self taught web developer and have been coding for around 5 years. I found my passion for coding in college where I studied a Double IT course, and passed with an AB grade A-Level qualification.
		</p>

		<p>
			After leaving college, I done some freelance work for local business owners. Initially this started out as designing and developing basic static sites, but eventually I was building more complex websites with a CMS written in plain PHP.
		</p>

		<p>
			After working freelance for around a year and building up sufficient skills, I began a full-time role as a Junior PHP Developer for a large e-commerce company based in Chelmsford, Essex.
		</p>

		<p>
			My responsibilities quickly grew at this company and was subsequently promoted to a Mid-Weight Developer. I work in a team of two other developers and am responsible for developing and maintaining both the front-end and back-end of a range of internal systems as well as the customer facing website, whilst also providing support to the other developers in the department.
		</p>


		<h1>My Skills</h1>

		<ul class="skill-list">
			<li>PHP</li>
			<li>Node.js</li>
			<li>Laravel</li>
			<li>JavaScript</li>
			<li>RabbitMQ</li>
			<li>REST API</li>
			<li>Git</li>
			<li>Gulp</li>
			<li>Grunt</li>
			<li>Linux</li>
			<li>MySQL</li>
			<li>MSSQL</li>
			<li>PostgreSQL</li>
			<li>MongoDB</li>
			<li>CSS (SCSS)</li>
			<li>HTML</li>
			<li>Mustache</li>
			<li>jQuery</li>
			<li>Foundation</li>
			<li>Bootstrap</li>
			<li>xDebug</li>
			<li>Composer</li>
			<li>NPM</li>
			<li>Bower</li>
			<li>Adobe Photoshop</li>
			<li>Adobe Illustrator</li>
		</ul>

		<p>
			I usually work LAMP stack and am responsible for all services in the stack - from the OS and how the pages are served, to what the user sees.
		</p>

		<p>
			Our website and the majority of our internal systems run on Laravel with MySQL as our method of data storage, and RabbitMQ handling slower tasks such as sending emails and generating PDF files. We use Gulp and Grunt to build source files before deployment, and Git for collaborating and deploying.
		</p>

		<p>
			I also have experience in working on a MEAN stack. I read about the benefits of serverside JavaScript on various tech blogs and decided to experiment with Node in my free time. I grew to really enjoy working with Node which is when I built <a href="https://zappem.xyz" target="_blank">Zappem</a>.
		</p>

		<p>
			Soon after, I was using my new Node skills to solve problems at work. One example of this was our order processing system. Previously, the sales department had to manually refresh the page to see new orders coming in. This was inefficient for both them and the server, so I implemented WebSockets to the system. Now, when an order is placed on the website by a customer, a WebSocket is sent to the internal system with information about the new order. This is then injected directly into the DOM without a page refresh.
		</p>

		<p>
			My favourite part of the web stack is the front-end. I love writing SASS and JavaScript. I always ensure that everything is pixel perfect, and I run benchmarks on my JavaScript code to ensure optimal performance.
		</p>


		<h1>Hobbies &amp; Interests</h1>

		<p>
			I'm a sucker for anything Apple. My current setup is a 13" MacBook Pro, using Sublime Text 3 for code and the terminal for just about everything else.
		</p>

		<p>
			Programming is also a hobby of mine so in my free time I'm usually working on cool projects such as home automation, or reading the latest tech news.
		</p>

		<p>
			When I'm not doing that, I'll either be at a bar with friends or binging a TV show on Netflix.{{--Curious to see what kind of shows I'm into? Why not check out my <a href="">profile</a> on <a href="">showoff</a> - a website I created for keeping track of what TV shows you've watched and sharing with your friends.--}}
		</p>
	</div>

	<div class="column small-12 medium-4 contact-list">
		<h1>Contact Details</h1>
		<ul>
			<li>
				<span>Email</span>
				<a href="mailto:dan@danj.eu">dan@danj.eu</a>
			</li>
			<li>
				<span>GitHub</span>
				<a href="https://github.com/danjohnson95" target="_blank">danjohnson95</a>
			</li>
			<li>
				<span>StackOverflow</span>
				<a href="http://stackoverflow.com/users/story/2719424" target="_blank">Dan Johnson</a>
			</li>
			<li>
				<span>LinkedIn</span>
				<a href="https://uk.linkedin.com/in/danieljohnson95" target="_blank">danieljohnson95</a>
			</li>
		</ul>
	</div>

</div>


@stop