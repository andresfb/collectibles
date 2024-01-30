<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'Book'],
            ['name' => 'Lego Set'],
            ['name' => 'Vinyl Record'],
            ['name' => 'Photography Print'],
        ]);
    }
}
