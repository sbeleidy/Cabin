<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Lesson;
use Makerscabin\User;

class LessonController extends Controller
{
    public function show(Request $request, $id)
    {
		if ($request->user() AND $request->user()->hasRole('student')) {
    		$lesson = Lesson::findOrFail($id);

    		return view('lesson.show', compact('lesson'));
    	}

    	return redirect('login')->withErrors('You must be logged in to view this lesson.');
    }
}
