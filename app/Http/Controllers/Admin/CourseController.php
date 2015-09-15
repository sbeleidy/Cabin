<?php

namespace Makerscabin\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Course;
use Makerscabin\Http\Requests\CourseCreateRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.course.index')->withCourses(Course::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.course.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CourseCreateRequest $request)
    {
        $course = new Course;

        $course->name = $request->name;
        $course->summary = $request->summary;
        $course->setDescriptionAttribute($request->description);
        $course->skill = $request->skill;
        $course->length = $request->length;
        $course->published = $request->published;
        $course->school_id = $request->school_id;
        $course->video = $request->video;

        $course->save();

        return redirect()
            ->route('admin.course.show', [$course->id])
            ->withSuccess('Course successfully creted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        $courses = Course::all();

        return view('admin.course.show', compact('course', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $courses = Course::all();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $courses = Course::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
