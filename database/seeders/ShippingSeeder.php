<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        for($i =0;$i<=1;$i++){
            DB::table('languages')->insert([
//                'name' => $language[$i],
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
