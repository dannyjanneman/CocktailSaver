<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment')->insert([
            ['equipment_name' => 'Cocktail shaker'],
            ['equipment_name' => 'Cocktail strainer'],
            ['equipment_name' => 'Fine strainer'],
            ['equipment_name' => 'Muddler'],
            ['equipment_name' => 'Barspoon'],
        ]);
    }
}
