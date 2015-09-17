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