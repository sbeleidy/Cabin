<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BaseController@index');
Route::get('course', 'CourseController@index');

Route::get('dashboard', 'UserController@dashboard');

Route::get('course/show/{id}', ['as' => 'course.show', 'uses' => 'CourseController@show']);

Route::get('lesson/show/{id}', ['as' => 'lesson.show', 'uses' => 'LessonController@show']);

Route::group(['prefix' => 'admin'], function () {
	Route::resource('school', 'Admin\SchoolController');
	Route::resource('course', 'Admin\CourseController');
	Route::resource('section', 'Admin\SectionController');
	Route::resource('lesson', 'Admin\LessonController');
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// User routes
Route::get('check', 'UserController@check');
Route::get('purchase', 'UserController@getPurchase');
Route::post('purchase', 'UserController@postPurchase');