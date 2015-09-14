@extends('app')

@section('content')
<section class="auth">
	<div class="row">
		<div class="small-12 columns">
			{!! Form::open(array('url' => 'login')) !!}
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', old('email')) !!}
				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password') !!}
				{!! Form::submit('Login', array('class' => 'button radius')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection