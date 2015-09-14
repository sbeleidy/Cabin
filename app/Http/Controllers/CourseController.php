<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Course;

class CourseController extends Controller
{
	public function index()
	{
		$courses = Course::all();

		return view('course.index', compact('courses'));
	}
	
    public function show($id)
    {
    	$course = Course::findOrFail($id);

    	return view('course.show', compact('course'));
    }
}
