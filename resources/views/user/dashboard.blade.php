@extends('app')

@section('content')
<section class="user">
	<div class="row">
		<div class="columns small-12">
			<h2>{{ Auth::user()->name }}
		</div>
	</div>
</section>
@endsection