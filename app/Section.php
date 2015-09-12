<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * Has Many Relationship with Lessons
     */
    public function lessons()
    {
    	return $this->hasMany('Makerscabin\Lesson');
    }

    /**
     * Belongs to Relationship with Section
     */
    public function section()
    {
    	return $this->belongsTo('Makerscabin\Section');
    }
}
