<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ice')->insert([
            ['ice_type' => 'Crushed ice'],
            ['ice_type' => 'Small ice cube'],
            ['ice_type' => 'Big ice cube'],
            ['ice_type' => 'Ice sphere'],
        ]);
    }
}
