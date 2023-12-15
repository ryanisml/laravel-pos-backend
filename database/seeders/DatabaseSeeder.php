<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'roles' => 'ADMIN',
            'email' => 'rryanismail@gmail.com',
            'phone_number' => '081234567890',
            'password' => Hash::make('samarinda123')
        ]);

        $this->call([
            ProductSeeder::class
        ]);
    }
}
