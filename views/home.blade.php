@extends('layout.default')

@section('content')

<div id="projects">

	{{--<div class="intro">
		<p>
			Here are some of the projects I've worked on recently.
		</p>

		<p>
			Click on them to read more, view the source code or try a demo.
		</p>

		<p>
			You can find out more about me on the <a href="/about" data-pjax>About</a> page where you'll find a list of all the technologies I've worked with.
		</p>
	</div>--}}


	<div class="row align-top">
	@foreach($projects as $project)
		<div class="column small-12 medium-6">
			<article>
				{{--<div class="top">
					{{$project['title']}}
				</div>--}}
				<div class="row align-top">
					<div class="column small-12">
						<a href="/projects/{{$project['link']}}" data-pjax>
							<div class="project-outer-img">
								<div class="project-img" style="background-image:url(/img/{{$project['img']}})"></div>
							</div>
						</a>
					</div>
					<div class="column small-12 descriptive-column">
						<div class="project-title">
							<a href="/projects/{{$project['link']}}" data-pjax>
								{{$project['title']}}
							</a>
						</div>
						<div class="project-description">
							{{$project['description']}}
						</div>
						<p>
							{!!$project['long_desc']!!} <strong><a href="/projects/{{$project['link']}}" data-pjax>Read more &raquo;</a></strong>
						</p>
						<div class="project-skills">
							@foreach($project['skills'] as $skill)
								<span>{{$skill}}</span>
							@endforeach
						</div>
					</div>
				</div>
			</article>
		</div>
	@endforeach

	{{--<div class="row align-top">
		@foreach($libraries as $library)
			<div class="column small-12">

			</div>
		@endforeach
	</div>--}}
</div>

@stop
