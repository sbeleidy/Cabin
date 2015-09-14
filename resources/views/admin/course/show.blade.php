@extends('app')

@section('content')
<section class="top-section ming hero">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $course->name }}</h2>
		</div>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="small-12 columns">
			{!! $course->description !!}
		</div>
	</div>
</section>
<section class="courses">
	<div class="row">
	@foreach ($course->sections as $section)
		<div class="small-12 medium-4 columns">
			<h3><a href="{{ route('admin.section.show', $section->id) }}">{{ $section->name }}</a></h3>
			<p>{!! $section->description !!}</p>
		</div>
	@endforeach
	</div>
</section>	
@endsection 