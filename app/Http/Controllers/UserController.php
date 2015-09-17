<?php

namespace Makerscabin\Http\Controllers;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Events\SeatWasPurchased;
use Event;
use Makerscabin\School;
use Auth;
use Makerscabin\Course;
use Makerscabin\Post;

class UserController extends Controller
{
   	public function dashboard()
   	{
         $courses = Course::all();
         $posts = Post::all();
   		return view('user.dashboard', compact('courses', 'posts'));
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

      public function getPurchase()
      {
         if ( ! Auth::user() ) return redirect('register');

         $courses = Course::all();
         return view('user.purchase', compact('courses'));
      }

      public function postPurchase(Request $request)
      {
         $user = Auth::user();

         $response = $user->charge(5000, [
                        'source' => $request->stripeToken,
                        'currency' => 'USD',
                        'receipt_email' => $user->email,
                        'description'  => 'Full Stack Web School',
                     ]);

         if ( $response ) {

            $user->assignRole('student');

            Event::fire(new SeatWasPurchased($user));

            return redirect('course')->withSuccess('Thanks for your purchase. Here are your available courses.');
         }

         return redirect('purchase')->withErrors(['Payment Failed']);
      }

      public function check()
      {
         if ( ! Auth::user()->hasRole('student')) {
            return redirect('purchase');
         }

         return redirect('dashboard');
      }
}
