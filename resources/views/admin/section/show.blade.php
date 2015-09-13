@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $section->name }}</h2>
		</div>
	</div>
</section>
<section class="courses">
	<div class="row">
	@foreach ($section->lessons as $lesson)
		<div class="small-12 medium-4 columns">
			<h3><a href="{{ route('admin.lesson.show', $lesson->id) }}">{{ $lesson->name }}</a></h3>
			<p>{{ $lesson->description }}</p>
		</div>
	@endforeach
	</div>
</section>
@endsection