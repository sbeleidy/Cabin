@extends('app')

@section('content')
<section class="hero school top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<span class="right"><a class="button" href="/admin/school/create">Create School</a></span>
			<h2>Schools</h2>
		</div>
	</div>
</section>
<section class="schools">
	<div class="row">
		<div class="small-12 columns">
			@foreach ($schools as $school)
			<h3><a href="{{ route('admin.school.show', $school->id) }}">{{ $school->name }}</a></h3>
			@endforeach
		</div>
	</div>
</section>
@endsection