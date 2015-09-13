<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
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
}
