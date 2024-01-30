<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Books\Database\Seeders\FormatSeeder;
use Modules\Books\Database\Seeders\GenreSeeder;
use Modules\Books\Database\Seeders\ServiceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TypeSeeder::class,
            GenreSeeder::class,
            FormatSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
