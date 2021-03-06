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
		$courses = Course::where('published', 1)->get();

		return view('course.index', compact('courses'));
	}
	
    public function show($slug)
    {
    	$course = Course::where('slug', $slug)->firstOrFail();
    	$courses = Course::where('published', 1)->get();

    	return view('course.show', compact('course', 'courses'));
    }
}
