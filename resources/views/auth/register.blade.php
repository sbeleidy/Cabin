@extends('app')

@section('content')
<section class="auth top-section hero">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			<h2 class="text-center">Register</h2>
			@include('partials.errors')
			{!! Form::open(array('url' => 'register', 'class' => 'panel')) !!}
				<div class="row">
					<div class="small-12 large-6 columns">
						{!! Form::label('email', 'Email') !!}
						{!! Form::email('email', old('email')) !!}
					</div>
					<div class="small-12 large-6 columns">
						{!! Form::label('name', 'Username') !!}
						{!! Form::text('name') !!}
					</div>
				</div>

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}

				{!! Form::submit('Register', array('class' => 'button radius success expand small')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection