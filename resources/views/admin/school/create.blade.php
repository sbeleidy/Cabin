@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2>Create School</h2>
		</div>
	</div>
<section class="schools">
	<div class="row">
		<div class="small-12 columns">
			{!! Form::open(array('route' => 'admin.school.store', 'method' => 'put')) !!}
				{!! Form::label('name', 'School Name') !!}
				{!! Form::text('name', '', array('class' => 'radius')) !!}
				{!! Form::submit('Create School', array('class' => 'button radius')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection('content')