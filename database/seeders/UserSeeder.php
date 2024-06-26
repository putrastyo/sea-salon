<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Thomas N',
            'email' => 'thomas.n@compfest.id',
            'phone' => '08123456789',
            'password' => Hash::make('Admin123'),
            'role' => 'admin'
        ]);
    }
}
