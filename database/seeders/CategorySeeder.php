<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ECONOMY'
        ]);
        DB::table('categories')->insert([
            'name' => 'SPOTLIGHT'
        ]);
        DB::table('categories')->insert([
            'name' => 'LIFESTYLE'
        ]);
        DB::table('categories')->insert([
            'name' => 'SPORTS'
        ]);
    }
}
