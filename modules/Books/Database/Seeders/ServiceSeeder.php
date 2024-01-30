<?php

namespace Modules\Books\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            ['name' => 'Kindle'],
            ['name' => 'Nook'],
            ['name' => 'Kodi'],
            ['name' => 'Audible'],
            ['name' => 'Calibre'],
            ['name' => 'Library'],
            ['name' => 'Dowload'],
        ]);
    }
}
