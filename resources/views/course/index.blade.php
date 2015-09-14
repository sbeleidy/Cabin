@extends('app')

@section('content')
<section class="top-section ming content-hero">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">Gain access to all of these courses for just one price.</h2>
		</div>
	</div>
</section>
<section class="courses ming">
	<div class="row">
		@foreach ($courses as $course)
		<div class="small-12 medium-4 columns">
		   	<div class="course-meta" data-equalizer-watch>
		       	<h4 class="subheader">{{ $course->skill }} <span class="time right"><i class="fa fa-clock-o"></i> {{ number_format(((int)$course->length / 60) / 60, 2) }} Hours</span></h4>
		       	<h3><a href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a></h3>
		       	<p>{{ substr($course->description, 0, 120) }}...</p>
		       	<p><a href="{{ route('course.show', $course->id) }}">View lessons <i class="fa fa-long-arrow-right"></i></a></p>
		     	</div>
		   </div>
		@endforeach
	</div>
</section>
@endsection