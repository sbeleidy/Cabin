<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(LessonTableSeeder::class);

        DB::table('users')->insert([
            'name'  => 'Scrivs',
            'email' => 'scrivs@gmail.com',
            'password' => bcrypt('Icub4ucme2'),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
