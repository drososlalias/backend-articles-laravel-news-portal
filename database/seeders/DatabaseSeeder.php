<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
=======
        $this->call(CategorySeeder::class);
        $this->call(ArticleSeeder::class);
>>>>>>> 1e6df7a9b0108d1d21a705fb7223242eafd92cd9
    }
}
