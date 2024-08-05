<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'username' => 'admin' . $i,
                'password' => Hash::make('12345678'),
                'nama' => 'Admin' . $i,
                'email' => 'admin' . $i . '@gmail.com',
                'role' => 'admin',
                'gambar' => 'profile.jpg',
                'remember_token'    => Str::random(20),
            ]);
        }

        for ($i = 0; $i < 5; $i++) {
            User::create([
                'username' => 'manager' . $i,
                'password' => Hash::make('12345678'),
                'nama' => 'Manager' . $i,
                'email' => 'manager' . $i . '@gmail.com',
                'role' => 'manager',
                'gambar' => 'profile.jpg',
                'remember_token'    => Str::random(20),
            ]);
        }
    }
}