@extends('app')

@section('content')
<section class="auth top-section hero ming">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			@include('partials.errors')
			@include('partials.success')
			<h2 class="text-center">Login</h2>
			{!! Form::open(array('url' => 'login', 'class' => 'panel')) !!}
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', old('email')) !!}

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}

				{!! Form::checkbox('remember') !!} Remember Me
				
				{!! Form::submit('Login', array('class' => 'button radius success expand small')) !!}
			{!! Form::close() !!}
			<p class="text-center">Forget your password or it isn&rsquo;t working? <a href="/password/email">You might need to reset it.</a></p>
		</div>
	</div>
</section>
@endsection