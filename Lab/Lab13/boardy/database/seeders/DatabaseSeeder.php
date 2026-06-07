<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Известный тестовый пользователь (для входа в систему)
        User::factory()->create([
            'name'     => 'Тест',
            'email'    => 'test@boardy.local',
            'password' => bcrypt('password'), // или Hash::make('password')
        ]);

        // 2. Случайные пользователи
        $users = User::factory()->count(4)->create();

        // 3. Посты от случайных пользователей
        Post::factory()->count(10)->create([
            'author_id' => fn() => $users->random()->id,
        ]);

        Comment::factory()->count(25)->create([
            'post_id' => fn() => Post::all()->random()->id,
            'author_id' => fn() => $users->random()->id,
        ]);
    }
}
