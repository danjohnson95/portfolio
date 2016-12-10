@extends('layout.default')

@section('content')

<div id="viewproject">
	<h1>{{$project['title']}}</h1>
	<h2>{{$project['subtitle']}}</h2>
	<img src="/img/zappem-mockup.jpg">

	<ul>
		<li>
			<strong>GitHub</strong> <a href="https://github.com/danjohnson95/zappem" target="_blank">danjohnson95/zappem</a>
		</li>
		<li>
			<strong>Website</strong> <a href="http://zappem.xyz">zappem.xyz</a>
		</li>
		<li>
			<strong>Demo</strong> <a href="http://demo.zappem.xyz">demo.zappem.xyz</a>
		</li>
	</ul>

	<p>
		Zappem is built in JS and runs on Node, so it can be installed by running <code>npm install -g zappem</code>.
	</p>
	<p>
		When running for the first time, the user will need to enter their MongoDB details - this could be their own MongoDB server or a hosted one from a service such as <a href="">mLab</a>.
	</p>
	<p>
		Once successfully connected to the user's database, they will be able to create their first project. With this, they use one of the connector libraries I have built to connect their application to Zappem.
	</p>
	<ul>
		<li>
			<a href="https://github.com/danjohnson95/zappem-laravel" target="_blank">Laravel Connector</a>
		</li>
	</ul>
	<p>
		The connector catches any exceptions thrown, compiles all the data it needs, and then sends it off via an API.
	</p>
	<p>
		Zappem then processes this error. Zappem instantly updates via WebSockets and also sends a HTML5 Notification if it just received a new unseen error.
	</p>
	<p>
		The API also returns a short 6 character code to identify this error. This can be displayed to the end-user so they can quote this code when contacting support.
	</p>
	<p>
		Developers can log into Zappem, search this short code and instantly be presented with the exact error the user encountered. It provides information such as the file, line number, class and even a snippet of code from where the error occured. It also shows information about the user such as their browser, OS etc.
	</p>

</div>

@stop