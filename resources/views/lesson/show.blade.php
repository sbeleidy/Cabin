@extends('app')

@section('content')
<section class="content-hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2><a href="{{ route('course.show', $lesson->course->id) }}">{{ $lesson->course->name }}</a>: {{ $lesson->name }}</h2>
		</div>
	</div>
</section>
<section class="lesson-video">
	<div class="row">
		<div class="small-12 medium-10 columns">
			<div class="flex-video widescreen">
				<iframe src="//fast.wistia.net/embed/iframe/{{ $lesson->video }}?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js"></script>
			</div>
		</div>
		<div class="small-12 medium-2 columns">
			<ul class="button-group stacked">
				<li><a class="button" href="{{ $lesson->download }}">Download</a></li>
				<li><a class="button" href="#">Watch Later</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="lesson">
	<div class="row">
		<div class="small-12 medium-8 columns">
			<p>{{ $lesson->description }}</p>
			<table class="lessons" width="100%">
			@foreach ($lesson->course->lessons as $less)
				<tr @if ($less->id == $lesson->id) class="active" @endif>
					<td><a href="{{ route('lesson.show', $less->id) }}">{{ $less->name }}</a></td>
					<td>{{ gmdate("i:s",$less->length) }}</td>
				</tr>
			@endforeach
			</table>
		</div>
	</div>
</section>
@endsection