<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Lesson;
use Makerscabin\User;
use Makerscabin\Course;

class LessonController extends Controller
{
    public function show(Request $request, $id)
    {
		if ($request->user() AND $request->user()->hasRole('student')) {
    		$lesson = Lesson::findOrFail($id);
    		$courses = Course::where('published', 1)
    			->get();

    		return view('lesson.show', compact('lesson', 'courses'));
    	}

    	return redirect('login')->withErrors('You must be logged in to view this lesson.');
    }
}
