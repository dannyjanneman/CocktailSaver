<?php

namespace Database\Seeders;
use Database\Seeders\UserSeeder;
use Database\Seeders\GarnishSeeder;
use Database\Seeders\IceSeeder;
use Database\Seeders\GlassSeeder;
use Database\Seeders\EquipmentSeeder;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(GarnishSeeder::class);
        $this->call(IceSeeder::class);
        $this->call(GlassSeeder::class);
        $this->call(EquipmentSeeder::class);
    }
}
