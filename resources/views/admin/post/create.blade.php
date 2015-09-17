@extends('app')

@section('content')
<section class="admin ming">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			<h2 class="text-center">Write Post</h2>
			@include('partials.errors')
			{!! Form::open(array('route' => 'admin.post.store', 'class' => 'panel')) !!}
				{!! Form::label('title','Title') !!}
				{!! Form::text('title', old('title')) !!}

				{!! Form::label('content', 'Content') !!}
				{!! Form::textarea('content', old('content'), array('rows' => '8')) !!}

				{!! Form::button('Post', array('type' => 'submit', 'class' => 'button radius expand')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection