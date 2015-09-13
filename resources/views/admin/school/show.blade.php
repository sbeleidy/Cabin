@extends('app')

@section('content')
<section class="schools top-section hero ming">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $school->name }}</h2>
		</div>
	</div>
</section>
<section class="courses">
	<div class="row">
		@foreach ($school->courses as $course)
		<div class="small-12 medium-4 columns">
			<div class="course">
				<h3><a href="{{ route('admin.course.show', $course->id) }}">{{ $course->name }}</a></h3>
				<p>{{ $course->description }}</p>
			</div>
		</div>
		@endforeach
	</div>
</section>
@endsection