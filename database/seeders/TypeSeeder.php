<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('types')->insert([
            ['code' => 'book', 'name' => 'Book'],
            ['code' => 'lego', 'name' => 'Lego Set'],
            ['code' => 'vinyl', 'name' => 'Vinyl Record'],
            ['code' => 'print', 'name' => 'Photography Print'],
        ]);
    }
}
