<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('glasses')->insert([
            ['glass_name' => 'Highball glass'],
            ['glass_name' => 'Old fashioned glass'],
            ['glass_name' => 'Wine glass'],
            ['glass_name' => 'Shot glass'],
        ]);

    }
}
