@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $course->name }}</h2>
		</div>
	</div>
</section>
<section class="lesson content">
	<div class="row">
		<div class="small-12 medium-6 columns">
			<div class="panel">
				<p>{{ $course->summary }}</p>
			</div>
			{!! $course->description !!}
		</div>
		<div class="small-12 medium-6 columns">
			<table class="lessons" width="100%">
				<thead>
					<tr>
						<th class="lesson-index">{{ count($course->lessons) }}</th>
						<th>Lessons</th>
						<th class="lesson-length">{{ number_format(((int)$course->length / 60) / 60, 2) }} Hours Total</th>
					</tr>
				</thead>
			<?php $count = 1; ?>
			@foreach ($course->lessons as $lesson)
				<tr>
					<td class="lesson-index"><a href="{{ route('lesson.show', $lesson->id) }}">{{ $count }}</a></td>
					<td class="lesson-title"><a href="{{ route('lesson.show', $lesson->id) }}"><i class="fa fa-play-circle"></i> {{ $lesson->name }}</a></td>
					<td class="lesson-length"><a href="{{ route('lesson.show', $lesson->id) }}">{{ gmdate("i:s",$lesson->length) }}</a></td>
				</tr>
			<?php $count++;?>
			@endforeach
			</table>
		</div>
	</div>
</section>
@endsection