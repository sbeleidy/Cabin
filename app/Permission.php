<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
    	return $this->belongsToMany('Makerscabin\Role');
    }
}
