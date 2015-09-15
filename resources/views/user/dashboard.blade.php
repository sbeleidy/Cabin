@extends('app')

@section('content')
<section class="courses top-section ming content-hero">
	<div class="row">
		@include ('partials.success')
		@foreach ($courses as $course)
		<div class="small-12 medium-4 columns">
		   	<div class="course-meta" data-equalizer-watch>
		       	<h4 class="subheader">{{ $course->skill }} <span class="time right"><i class="fa fa-clock-o"></i> {{ number_format(((int)$course->length / 60) / 60, 2) }} Hours</span></h4>
		       	<h3><a href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a></h3>
		       	<p>{!! substr($course->summary, 0, 120) !!}...</p>
		       	<p><a href="{{ route('course.show', $course->id) }}">View lessons <i class="fa fa-long-arrow-right"></i></a></p>
		     	</div>
		   </div>
		@endforeach
	</div>
</section>
@endsection