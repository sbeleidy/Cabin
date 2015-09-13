<?php

use Illuminate\Database\Seeder;

use Makerscabin\Lesson;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Lesson::truncate();

    	factory(Lesson::class, 2000)->create();
    }
}
