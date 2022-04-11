<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Call UserSeeder
        $this->call([
            UserSeeder::class,
            FollowerSeeder::class,
            PublicationSeeder::class,
        ]);
    }
}
