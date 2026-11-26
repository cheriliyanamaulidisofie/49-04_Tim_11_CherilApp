<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Akun Admin Utama (Cheriliyana Maulidisofie)
        User::create([
            'name' => 'Cheriliyana Maulidisofie',
            'email' => 'cheriliyanamaulidisofie@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);
    }
}