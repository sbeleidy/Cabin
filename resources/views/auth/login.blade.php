@extends('app')

@section('content')
<section class="auth top-section hero">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			<h2 class="text-center">Login</h2>
			{!! Form::open(array('url' => 'login', 'class' => 'panel')) !!}
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', old('email')) !!}
				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}
				{!! Form::submit('Login', array('class' => 'button radius success expand small')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection