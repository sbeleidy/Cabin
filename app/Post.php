<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;
use Makerscabin\Services\Markdowner;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

	protected $fillable = [
		'title', 'content',
	];

    protected $sluggable = [
        'build_from'    => 'title',
        'save_to'       => 'slug',  
    ];

    public function setContentAttribute($value)
    {
        $markdown = new Markdowner();

        $this->attributes['content'] = $markdown->toHTML($value);
    }
}
