<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */public function run()
{
    User::create([
        'name' => 'Super Admin',
        'email' => 'superadmin@test.com',
        'password' => Hash::make('password'),
        'role' => 'superadmin',
    ]);

    User::create([
        'name' => 'Admin User',
        'email' => 'admin@test.com',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]);

    User::create([
        'name' => 'Teacher User',
        'email' => 'teacher@test.com',
        'password' => Hash::make('password'),
        'role' => 'teacher',
    ]);

    User::create([
        'name' => 'Student User',
        'email' => 'student@test.com',
        'password' => Hash::make('password'),
        'role' => 'student',
    ]);
}
}
