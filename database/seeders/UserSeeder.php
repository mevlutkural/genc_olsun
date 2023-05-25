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
     */
    public function run(): void
    {
        User::create([
            'name_surname' => 'Admin Admin',
            'email'        => 'admin@gencolsun.com',
            'password'     => Hash::make('admin'),
            'is_active'    => true,
        ]);
    }
}