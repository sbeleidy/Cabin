<?php

use Illuminate\Database\Seeder;

use Makerscabin\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::truncate();

        factory(School::class, 5)->create();
    }
}
