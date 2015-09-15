<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;
use Makerscabin\Services\Markdowner;

class Lesson extends Model
{
	protected $fillable = [
		'name', 'description', 'github', 'video', 'download', 'length'
	];

    protected $sluggable = [
        'build_from'    => 'name',
        'save_to'       => 'slug',  
    ];

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

    public function setDescriptionAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['description'] = $markdown->toHTML($value);
    }
}
