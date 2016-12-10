@extends('layout.default')

@section('content')

<div id="projects">
	<h1>Projects</h1>

	@foreach($projects as $project)
		<article>
			<div class="row">
				<div class="column shrink">
					<img src="/img/{{$project['img']}}">
				</div>
				<div class="column descriptive-column">
					<div class="project-title">
						{{$project['title']}}
					</div>
					<div class="project-description">
						{{$project['description']}}
					</div>
					<div class="project-skills">
						@foreach($project['skills'] as $skill)
							<span>{{$skill}}</span>
						@endforeach
					</div>
					<p>
						{!!$project['long_desc']!!} <strong><a href="/projects/{{$project['link']}}">Read more &raquo;</a></strong>
					</p>
				</div>
			</div>
		</article>
	@endforeach
</div>

@stop