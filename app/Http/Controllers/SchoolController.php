<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index()
    {
    	return view('school.index');
    }
}
