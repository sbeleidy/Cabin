<?php	

namespace Makerscabin;

trait HasRoles {
	public function roles()
	{
	    return $this->belongsToMany('Makerscabin\Role');
	}

	public function assignRole($role)
	{
	    $this->roles()->save(
	        Role::whereName($role)->firstOrFail()
	    );
	}

	public function hasRole($role)
	{
	    if (is_string($role)) {
	        return $this->roles->contains('name', $role);
	    }

	    return !! $role->intersect($this->roles)->count();
	}
}