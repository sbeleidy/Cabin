@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">Step 1. Register</h2>
		</div>
	</div>
</section>
<section class="auth">
	<div class="row">
		<div class="small-12 medium-6 columns">
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
		<div class="small-12 medium-6 columns content">
			<p>First step is to get an account setup. Don't worry, there is no email confirmation or other hoops you have to jump through. After this you will be shown the payment screen.</p>
			<p>Your account will be used for all other sections (coming soon!) on Makers Cabin as well.</p>
		</div>
	</div>
</section>
@endsection