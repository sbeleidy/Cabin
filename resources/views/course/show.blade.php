@extends('app')

@section('content')
<section class="content-hero top-section oil">
	<div class="row">
		<div class="small-12 columns">
			<h3 class="heading-meta"><i class="fa fa-clock-o"></i> Last refreshed: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($course->updated_at))->diffForHumans() }}</h3>
			<h2>{{ $course->name }}</h2>
		</div>
	</div>
</section>
@if ( $course->video )			
<section class="lesson-video oil">
	<div class="row">
		<div class="small-12 columns">
			<div class="flex-video widescreen">
				<iframe src="//fast.wistia.net/embed/iframe/{{ $course->video }}?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js"></script>
			</div>
		</div>
	</div>
</section>
@endif
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
					<tr class="table-header">
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