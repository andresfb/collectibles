<?php

namespace Modules\Books\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormatSeeder extends Seeder
{
    public function run(): void
    {
        $typeId = DB::table('types')
            ->where('name', 'Book')
            ->value('id');

        DB::table('formats')->insert([
            ['type_id' => $typeId, 'name' => 'hardcover', 'is_digital' => false],
            ['type_id' => $typeId, 'name' => 'paperback', 'is_digital' => false],
            ['type_id' => $typeId, 'name' => 'ebook', 'is_digital' => true],
            ['type_id' => $typeId, 'name' => 'audiobook', 'is_digital' => true],
        ]);
    }
}
