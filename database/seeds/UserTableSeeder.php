<?php

use Illuminate\Database\Seeder;
use Makerscabin\User;
use Makerscabin\School;
use Makerscabin\Role;
use Makerscabin\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$schools = School::all();
        User::truncate();
        Role::truncate();

        factory(User::class, 50)->create()->each(function ($users) use ($schools) {
        	$users->schools()->attach(mt_rand(1,5));
        });
    }
}
