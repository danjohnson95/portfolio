@extends('layout.default')

@section('content')

<div id="viewproject">
	<h1>{{$project['title']}}</h1>
	<h2>{{$project['subtitle']}}</h2>
	<img src="/img/{{$project['img']}}">

	<ul>
		@foreach($project['links'] as $Name=>$URL)
			<li>
				<strong>{{$Name}}</strong> <a href="{{$URL}}" target="_blank">{{$URL}}</a>
			</li>
		@endforeach
	</ul>

	{!! $project['body'] !!}

</div>

@stop