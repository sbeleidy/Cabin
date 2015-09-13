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

Route::get('course/show/{id}', ['as' => 'course.show', 'uses' => 'CourseController@show']);

Route::get('lesson/show/{id}', ['as' => 'lesson.show', 'uses' => 'LessonController@show']);

Route::group(['prefix' => 'admin'], function () {
	Route::resource('school', 'Admin\SchoolController');
	Route::resource('course', 'Admin\CourseController');
	Route::resource('section', 'Admin\SectionController');
	Route::resource('lesson', 'Admin\LessonController');
});