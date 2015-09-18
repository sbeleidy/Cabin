@extends('app')

@section('content')
<section class="auth">
	<div class="row">
		<div class="small-12 columns">
			<h2>Posts</h2>
			<ul>
			@foreach ($posts as $post)
				<li><a href="{{ route('admin.post.show', $post->id) }}">{{ $post->title }}</a></li>
			@endforeach
			</ul>
		</div>
	</div>
</section>
@endsection