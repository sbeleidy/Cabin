@extends('app')

@section('content')
<section class="auth hero top-section">
	<div class="row">
		<div class="small-12 columns">
			{{ Form::open('url' => 'password/reset') }}
				{{ Form::label('email', 'Email') }}
				{{ Form::email('email', old('email')) }}

				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', old('password')) }}

				{{ Form::label('password_confirmation', 'Confirm Password') }}
				{{ Form::password('password_confirmation'), old('password_confirmation') }}

				{{ Form::submit('Reset Password', array('class' => 'expand button radius small')) }}
			{{ Form::close() }}
		</div>
	</div>
</section>
@endsection