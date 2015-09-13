<?php

namespace Makerscabin\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Makerscabin\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Makerscabin\Model' => 'Makerscabin\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        foreach ($this->getPermissions() as $permission) {
            $gate->define($permission->name, function ($user) {
                $user->hasRole($permission->roles);
            });
        }
    }

    protected function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}
