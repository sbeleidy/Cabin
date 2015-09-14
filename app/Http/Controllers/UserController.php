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

   	/**
   	 * Update User Profile
   	 */
   	public function update(Request $request, $id)
   	{
   		if ($request->user()->cannot('update-profile')) {
   			abort(403);
   		}
   	}

      public register()
      {
         return view('user.register');
      }
}
