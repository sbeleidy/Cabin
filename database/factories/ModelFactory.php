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
        'name' 				=> $faker->unique()->firstName(),
        'email' 			=> $faker->email,
        'password' 			=> bcrypt(str_random(10)),
        'remember_token' 	=> str_random(10),
    ];
});

$factory->define(Makerscabin\School::class, function (Faker\Generator $faker) {
	return [
		'name' 			=> $faker->unique()->sentence(mt_rand(1,2)),
		'description' 	=> $faker->realText(144),  
		'summary'		=> $faker->sentence(20),
	];
});

$factory->define(Makerscabin\Course::class, function (Faker\Generator $faker) {
	return [
		'name'			=> $faker->unique()->sentence(mt_rand(1,3)),
		'summary'		=> $faker->sentence(70,144),
		'description'	=> join("\n\n", $faker->paragraphs(mt_rand(3,10))),
		'school_id'		=> mt_rand(1,5),
		'skill'			=> 'BEGINNER',
		'length'		=> mt_rand(600, 60000),
		'published'		=> 1,
		'video'			=> '5pwfamiuit',
	];
});

$factory->define(Makerscabin\Section::class, function (Faker\Generator $faker) {
	return [
		'name'			=> $faker->word(),
		'description'	=> $faker->sentence(3,10),
		'course_id'		=> mt_rand(1,100),
	];
});

$factory->define(Makerscabin\Lesson::class, function (Faker\Generator $faker)
{
	return [
		'name' 			=> $faker->unique()->sentence(mt_rand(1,3)),
		'description' 	=> join("\n\n", $faker->paragraphs(mt_rand(3,10))),	
		'github'		=> 'https://github.com/MakersCabin/Cabin',
		'video'			=> '5pwfamiuit',
		'length'		=> mt_rand(180, 1200),
		'course_id'		=> mt_rand(1, 100),
		'section_id' 	=> mt_rand(1,500),
	];
});