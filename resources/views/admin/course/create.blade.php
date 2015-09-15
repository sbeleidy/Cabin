@extends('app')

@section('content')
<section class="hero top-section ming">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			<h2 class="text-center">Create Course</h2>
			{!! Form::open(array('route' => 'admin.course.store', 'class' => 'panel')) !!}
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', old('name')) !!}

				{!! Form::label('summary', 'Summary') !!}
				{!! Form::text('summary', old('summary')) !!}

				{!! Form::label('skill', 'Skill Level') !!}
				<select name="skill">
					<option value="BEGINNER">BEGINNER</option>
					<option value="INTERMEDIATE">INTERMEDIATE</option>
					<option value="ADVANCED">ADVANCED</option>
					<option value="EVERYBODY">EVERYBODY</option>
				</select>

				{!! Form::label('video', 'Video') !!}
				{!! Form::text('video', old('video')) !!}

				{!! Form::label('description', 'Description') !!}
				{!! Form::textarea('description', old('description')) !!}

				{!! Form::label('length', 'Length (seconds)') !!}
				{!! Form::text('length', 0) !!}

				{!! Form::hidden('school_id', '1') !!}
				
				{!! Form::label('Published') !!}
				{!! Form::radio('published', '0') !!} No
				{!! Form::radio('published', '1') !!} Yes

				{!! Form::submit('Create Lesson', array('class' => 'button small expand radius')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection