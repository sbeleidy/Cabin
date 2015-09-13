<?php

namespace Makerscabin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
    	return $this->belongsToMany('Makerscabin\Permission');
    }

    public function givePermissionTo(Permission $permission)
    {
    	return $this->permissions()->save($permission);
    }
}
