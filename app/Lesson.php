<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;
use Makerscabin\Services\Markdowner;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Lesson extends Model implements SluggableInterface
{

    use SluggableTrait;

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
