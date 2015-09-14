@extends('app')

@section('content')
<section class="user hero top-section">
	<div class="row">
		<div class="columns small-12">
			<h2>{{ Auth::user()->name }}
		</div>
	</div>
</section>
@endsection