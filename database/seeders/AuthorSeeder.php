<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('authors')->insert([
            'name' => 'Jue',
            'gender'=>'female',
            'photo' => '/storage/author/jue.png',
            'bio' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
            'dob' => '1988-1-11',
            'dod' => NULL,
            'nationality' => 'Myanmar',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('authors')->insert([
            'name' => 'Motion',
            'gender'=>'male',
            'photo' => '/storage/author/motion.png',
            'bio' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'dob' => '1996-12-11',
            'dod' => NULL,
            'nationality' => 'Myanmar',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
