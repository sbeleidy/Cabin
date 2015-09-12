<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
    	'name', 'price',
    ];

    /**
     * The One-to-Many relationship for Courses
     */
    public function courses()
    {
    	return $this->hasMany('Makerscabin\Course');
    }

    public function users()
    {
        return $this->belongsToMany('Makerscabin\User');
    }
}
