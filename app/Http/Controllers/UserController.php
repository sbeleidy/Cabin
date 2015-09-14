<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;

class UserController extends Controller
{
   	public function dashboard()
   	{
   		return view('user.dashboard');
   	}
}
