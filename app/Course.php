<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;
use Makerscabin\Services\Markdowner;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Course extends Model implements SluggableInterface
{

    use SluggableTrait;

    protected $fillable = [
        'name', 'summary', 'description', 'skill', 'length', 'published'
    ];

    protected $sluggable = [
        'build_from'    => 'name',
        'save_to'       => 'slug',  
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
