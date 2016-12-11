@extends('layout.default')

@section('content')

<div id="viewproject">
	<img src="/img/{{$project['img']}}">
	<h1>{{$project['title']}}</h1>
	<h2>{{$project['subtitle']}}</h2>
	<ul class="links">
		@foreach($project['links'] as $Name=>$URL)
			<li>
				{{$Name}} <a href="{{$URL}}" target="_blank">{{$URL}}</a>
			</li>
		@endforeach
	</ul>

	{!! $project['body'] !!}

</div>

@stop