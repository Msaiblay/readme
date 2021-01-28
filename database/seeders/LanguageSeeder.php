<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $languages = array('Myanmar', 'English');

        foreach ($languages as $language) {
            DB::table('language')->insert([
                'name' => $language,
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
