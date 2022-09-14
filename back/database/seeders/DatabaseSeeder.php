<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'first_name' => 'Administrator',
            'last_name' => 'Controllers',
            'email' => 'admin123@gmail.com',
            'password' => 'admIn123',
            'role' => 'admin',
        ]);
        \App\Models\Company::create([
            'name' => 'name',
            'email' => 'vansao@gmail.com',
            'address' => 'address',
        ]);
    }
}
