<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Course;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$courses = Course::where('published', 1)
    		->orderBy('id', 'desc')
    		->take(18)
    		->get();
        return view('base.home', compact('courses'));
    }
}
