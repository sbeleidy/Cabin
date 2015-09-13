<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Lesson;

class LessonController extends Controller
{
    public function show($id)
    {
    	$lesson = Lesson::findOrFail($id);

    	return view('lesson.show', compact('lesson'));
    }
}
