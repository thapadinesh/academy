<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Course_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_category')->insert([
            'name' => 'Information Technology',
            'slug' => 'information-technology',
            'about' => 'This is about.',
        ]);
    }
}
