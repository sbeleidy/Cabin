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
}
