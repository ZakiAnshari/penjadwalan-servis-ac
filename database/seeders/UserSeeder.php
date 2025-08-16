<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Admin'],
            ['name' => 'Teknisi'],
        ];

        foreach ($roles as $role) {
            Roles::create($role);
        }

        // Admin
        User::create([
            'name' => 'Admin Britania',
            'username' => 'admin',
            'contact' => '082202020202',
            'role_id' => 1,
            'email' => 'admin@britaniateknik.com',
            'jenis_kelamin' => 'Laki-Laki',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Rofi khalbinur padli',
            'username' => 'rofi',
            'contact' => '082202020202',
            'role_id' => 2,
            'email' => 'rofikhalbinur.com',
            'jenis_kelamin' => 'Laki-Laki',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
    }
}
