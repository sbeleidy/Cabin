@extends('app')

@section('content')
<section class="hero top-section oil">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $course->name }}</h2>
		</div>
	</div>
</section>
<section class="lesson">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<div class="panel">
				<p>{{ $course->summary }}</p>
			</div>
			<p>{{ $course->description }}</p>
		</div>
		<div class="small-12 medium-6 columns">
			<h3>Lessons: {{ count($course->lessons) }}</h3>
			<table width="100%">
			<?php $count = 1; ?>
			@foreach ($course->lessons as $lesson)
				<tr>
					<td>{{ $count }}</td>
					<td><a href="{{ route('lesson.show', $lesson->id) }}">{{ $lesson->name }}</a></td>
					<td>{{ gmdate("i:s",$lesson->length) }}</td>
				</tr>
			<?php $count++;?>
			@endforeach
			</table>
		</div>
	</div>
</section>
@endsection