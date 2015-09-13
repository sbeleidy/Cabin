@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2>{{ $lesson->name }}</h2>
		</div>
	</div>
</section>
<section class="lesson">
	<div class="row">
		<div class="small-12 columns">
			<p>{{ $lesson->description }}</p>
		</div>
	</div>
</section>
@endsection