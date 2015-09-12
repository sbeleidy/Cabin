<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Makerscabin\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word(),
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Makerscabin\School::class, function (Faker\Generator $faker) {
	return [
		'name' 			=> $faker->word(),
		'description' 	=> $faker->paragraph(3,10),  
		'summary'		=> $faker->sentence(20),
	];
});
