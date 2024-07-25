<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Danny',
            'email' => 'danny@mail.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin'),
            'admin' => true,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
