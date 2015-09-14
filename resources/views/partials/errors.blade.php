@if (count($errors) > 0)
	<div class="alert-box alert">
		<p><strong>Yikes!</strong> There were some problems with your information.</p>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif