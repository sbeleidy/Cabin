<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;
use Makerscabin\Services\Markdowner;

class Course extends Model
{

    protected $fillable = [
        'name', 'summary', 'description', 'skill', 'length', 'published'
    ];

    /**
     * Belong To Relationship with School
     */
    public function school()
    {
    	return $this->belongsTo('Makerscabin\School');
    }

    /**
     * Has Many Sections Relationship with Sections
     */
    public function sections()
    {
    	return $this->hasMany('Makerscabin\Section');
    }

    public function lessons()
    {
        return $this->hasMany('Makerscabin\Lesson');
    }

    public function setDescriptionAttribute($value)
    {
        $markdown = new Markdowner();

        $this->attributes['description'] = $markdown->toHTML($value);
    }
}
