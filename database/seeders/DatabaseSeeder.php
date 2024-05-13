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

        \App\Models\User::create([
            'name' => 'Atmadi santoso',
            'email' => 'boengkak@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '08196027610',
            'roles' => 'ADMIN',
        ]);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
