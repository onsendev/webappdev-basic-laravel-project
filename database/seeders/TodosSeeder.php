<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
use App\Models\User;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taro = User::where('email', 'taro@example.com')->first();
        Todo::create([
            'user_id' => $taro->id,
            'title' => '勉強',
        ]);

        Todo::create([
            'user_id' => $taro->id,
            'title' => '買い出し',
        ]);

        Todo::create([
            'user_id' => $taro->id,
            'title' => '洗濯',
        ]);

        $jiro = User::where('email', 'jiro@example.com')->first();
        Todo::create([
            'user_id' => $jiro->id,
            'title' => '掃除',
        ]);

        Todo::create([
            'user_id' => $jiro->id,
            'title' => '洗車',
        ]);
    }
}
