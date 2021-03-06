<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GenderSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\UserSeeder;
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

        $this->call([
            GenderSeeder::class,
            CategorySeeder::class,
            SizeSeeder::class,
            UserSeeder::class,
        ]);
    }
}
