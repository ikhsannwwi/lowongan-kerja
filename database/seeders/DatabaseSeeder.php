<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mochammad Ikhsan Nawawi',
            'email' => 'moderator@ikhsannawawi.id',
            'password' => bcrypt('sanbray'),
            'foto' => 'user.jpg',
            'remember_token' => Str::random(60),
        ]);
    }
}
