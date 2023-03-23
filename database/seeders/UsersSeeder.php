<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Taro',
            'email' => 'taro@example.com',
            'password' => Hash::make('taro'),
        ]);
        
        User::create([
            'name' => 'Jiro',
            'email' => 'jiro@example.com',
            'password' => Hash::make('jiro'),
        ]);
    }
}
