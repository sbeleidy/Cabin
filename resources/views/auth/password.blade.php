@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			<h2 class="text-center">Reset Password</h2>
			{!! Form::open(array('url' => 'password/email', 'class' => 'panel')) !!}
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', old('email')) !!}
				{!! Form::submit('Send Password Reset Link', array('class' => 'expand button radius small')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection