@extends('app')

@section('content')
<section class="top-section hero ming">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			<h2 class="text-center">Create Lesson</h2>
			{!! Form::open(array('route' => 'admin.lesson.store', 'class' => 'panel')) !!}
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', old('name')) !!}

				{!! Form::label('description', 'Description') !!}
				{!! Form::textarea('description', old('description')) !!}

				{!! Form::label('github', 'Github') !!}
				{!! Form::text('github', old('github')) !!}

				{!! Form::label('video', 'Video') !!}
				{!! Form::text('video', old('video')) !!}

				{!! Form::label('download', 'Download URL') !!}
				{!! Form::text('download', old('download')) !!}

				{!! Form::label('length', 'Length (seconds)') !!}
				{!! Form::text('length', old('length')) !!}

				{!! Form::label('course', 'Course') !!}
				<select name="course_id">
					@foreach($courses as $course)
					<option value="{{ $course->id }}">{{ $course->name }}</option>
					@endforeach
				</select>
				
				{!! Form::label('Published') !!}
				{!! Form::radio('published', '0') !!} No
				{!! Form::radio('published', '1', true) !!} Yes

				{!! Form::submit('Create Lesson', array('class' => 'button small expand radius')) !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@endsection