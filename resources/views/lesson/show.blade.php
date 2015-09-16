@extends('app')

@section('content')
<section class="content-hero top-section oil">
	<div class="row">
		<div class="small-12 columns">
			<h3 class="heading-meta"><a href="{{ route('course.show', $lesson->course->id) }}">{{ $lesson->course->name }}</a></h3>
			<h2>{{ $lesson->name }}</h2>
		</div>
	</div>
</section>
<section class="lesson-video oil">
	<div class="row">
		<div class="small-12 medium-9 columns">
			<div class="flex-video widescreen">
				<iframe src="//fast.wistia.net/embed/iframe/{{ $lesson->video }}?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js"></script>
			</div>
		</div>
		<div class="small-12 medium-3 columns">
			<ul class="button-group stacked">
				@unless ( ! $lesson->github )
				<li><a class="button" href="https://github.com/{{ $lesson->github }}"><i class="fa fa-github-alt"></i> Github Repo</a></li>
				@endunless
				<!--<li><a class="button" href="#"><i class="fa fa-check-circle-o"></i> Complete</a></li>-->
				<li><a class="button" href="{{ $lesson->download }}"><i class="fa fa-cloud-download"></i> Download Video</a></li>
				<!--<li><a class="button" href="#"><i class="fa fa-eye"></i> Watch Later</a></li>-->
				<li><a class="button" href="#comments"><i class="fa fa-comments"></i> Comments</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="lesson content">
	<div class="row">
		<div class="small-12 medium-6 columns">
			{!! $lesson->description !!}
		</div>
		<div class="small-12 @unless ( ! $lesson->description ) medium-6 @endunless columns">
			<table class="lessons" width="100%">
				<thead>
					<tr class="table-header">
						<th class="lesson-index">{{ count($lesson->course->lessons) }}</th>
						<th>Lessons</th>
						<th class="lesson-length">{{ number_format(((int)$lesson->course->length / 60) / 60, 2) }} Hours Total</th>
					</tr>
				</thead>
			<?php $count = 1; ?>
			@foreach ($lesson->course->lessons as $less)
				<tr @if ($less->id == $lesson->id) class="active" @endif>
					<td class="lesson-index"><a href="{{ route('lesson.show', $less->slug) }}">{{ $count }}</a></td>
					<td class="lesson-title"><a href="{{ route('lesson.show', [$lesson->course->slug, $less->slug]) }}"><i class="fa fa-play-circle"></i> {{ $less->name }}</a></td>
					<td class="lesson-length"><a href="{{ route('lesson.show', $less->slug) }}">{{ gmdate("i:s",$less->length) }}</a></td>
				</tr>
				<?php $count++;?>
			@endforeach
			</table>
		</div>
		@if (App::environment() === 'production')
		<div class="small-12 columns" id="comments">
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES * * */
			    var disqus_shortname = 'makerscabin';
			    @if (isset($slug))
			    	var disqus_identifier = 'makerscabin-{{ $slug }}';
			    @endif
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</div>
		@endif
	</div>
</section>
@endsection