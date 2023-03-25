<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AttributesSeeder::class,
            AttributeVariationSeeder::class,
            ProductSeeder::class,
            ProductVariationSeeder::class,
            UserSeeder::class,
        ]);
    }
}
