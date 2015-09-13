@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $course->name }}</h2>
		</div>
	</div>
</section>
<section class="lessons">
	<div class="row">
		<div class="small-12 medium-8 columns">
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
		<div class="small-12 medium-4 columns">
			<p>{{ $course->description }}</p>
		</div>
	</div>
</section>
@endsection