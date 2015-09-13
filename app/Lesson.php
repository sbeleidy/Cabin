<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * BelongsTo Relationship with Sections
     */
    public function section()
    {
    	return $this->belongsTo('Makerscabin\Section');
    }

    public function course()
    {
    	return $this->belongsTo('Makerscabin\Course');
    }
}
