<?php

use Illuminate\Database\Seeder;
use Makerscabin\Section;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::truncate();

        factory(Section::class, 500)->create();
    }
}
