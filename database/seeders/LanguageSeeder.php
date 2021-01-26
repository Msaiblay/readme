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
        $language = array('Myanmar','English');
        for($i =0;$i<=1;$i++){
            DB::table('languages')->insert([
                'name' => $language[$i],
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
