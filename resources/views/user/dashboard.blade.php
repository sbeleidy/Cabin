@extends('app')

@section('content')
<section class="courses ming">
	<div class="row">
		<div class="small-12 content medium-6 columns">
			<h3>News</h3>
			@foreach ($posts as $post)
			<div class="news-post">
				<h4>{{ $post->title }}</h4>
				{!! $post->content !!}
			</div>
			@endforeach
		</div>
		<div class="small-12 medium-6 columns">
			<div class="small-12 medium-6 columns right">
				<a href="#" data-dropdown="sorter" aria-controls="sorter" aria-expanded="false" class="button dropdown">Sort By {{$request->input('sortBy')}}</a>
				<ul id="sorter" data-dropdown-content class="f-dropdown" aria-hidden="true">
					<li><a href="/dashboard?sortBy=skill&order={{$request->input('order')}}">Skill Level</a></li>
					<li><a href="/dashboard?sortBy=length&order={{$request->input('order')}}">Length</a></li>
					<li><a href="/dashboard?sortBy=updated_at&order={{$request->input('order')}}">Last Refreshed</a></li>
					<li><a href="/dashboard?sortBy=name&order={{$request->input('order')}}">Name</a></li>
				</ul>
				<a href="/dashboard?sortBy={{$request->input('sortBy')}}&order={{$request->input('order')=='desc' ? 'asc' : 'desc'}}" class="button"><i class="fa fa-angle-double-{{$request->input('order')=='desc' ? 'up' : 'down' }}"></i></a>
			</div>
			<div class="row">
				@foreach ($courses as $course)
				<div class="small-12 columns">
		   			<div class="course-meta" data-equalizer-watch>
		       			<h4 class="subheader">{{ $course->skill }} <span class="time right"><i class="fa fa-clock-o"></i> {{ number_format(((int)$course->length / 60) / 60, 2) }} Hours</span></h4>
		       			<h3><a href="{{ route('course.show', $course->slug) }}">{{ $course->name }}</a></h3>
		       			<p>{!! substr($course->summary, 0, 120) !!}...</p>
		       			<p><a href="{{ route('course.show', $course->slug) }}">View {{ count($course->lessons) }} lessons <i class="fa fa-long-arrow-right"></i></a></p>
		       			<p>Last refreshed: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($course->updated_at))->diffForHumans() }}</p>
		       		</div>
		     	</div>
		     	@endforeach
		   </div>
		</div>
	</div>
</section>
@endsection