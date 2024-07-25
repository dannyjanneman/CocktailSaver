<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GarnishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('garnishes')->insert([
            ['garnish_name' => 'Lime slice'],
            ['garnish_name' => 'Lime wedge'],
            ['garnish_name' => 'Lemon slice'],
            ['garnish_name' => 'Lemon wedge'],
            ['garnish_name' => 'Strawberry'],
            ['garnish_name' => 'Orange slice'],
            ['garnish_name' => 'Orange peel'],
            ['garnish_name' => 'Mint'],
            ['garnish_name' => 'Orange bitters'],
            ['garnish_name' => 'Angostura bitters'],
        ]);

    }
}
