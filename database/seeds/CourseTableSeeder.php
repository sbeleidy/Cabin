<?php

use Illuminate\Database\Seeder;

use Makerscabin\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();

        factory(Course::class, 100)->create();
    }
}
