<?php

namespace Makerscabin\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Makerscabin\Http\Requests;
use Makerscabin\Http\Requests\LessonCreateRequest;
use Makerscabin\Http\Requests\LessonUpdateRequest;
use Makerscabin\Http\Controllers\Controller;
use Makerscabin\Lesson;
use Makerscabin\Course;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $courses = Course::all();

        return view('admin.lesson.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LessonCreateRequest $request)
    {
        $lesson = new Lesson;

        $lesson->name = $request->name;
        $lesson->setDescriptionAttribute($request->description);
        $lesson->github = $request->github;
        $lesson->video = $request->video;
        $lesson->download = $request->download;
        $lesson->length = $request->length;
        $lesson->course_id = $request->course_id;

        $lesson->save();

        return redirect()
            ->route('admin.lesson.show', [$lesson->id])
            ->withSuccess('Lesson successfully creted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('admin.lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
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
