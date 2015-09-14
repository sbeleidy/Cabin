<?php

namespace Makerscabin\Http\Requests;

use Makerscabin\Http\Requests\Request;

class LessonCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required|max:255',
            'description' => 'required',
            'github'    => 'required',
            'video' => 'required|max:255',
            'download'  => 'required|max:255',
            'length'    => 'required',
            'course_id' => 'required',
            'published' => 'required',
        ];
    }
}
