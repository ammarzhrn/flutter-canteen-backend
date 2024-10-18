<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([
            'name' => 'ammar',
            'email' => 'ammar@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'phone' => '082169696969',
        ]);

    }
}