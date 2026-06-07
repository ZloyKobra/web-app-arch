<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'body' => fake()->paragraph(2, 4),
            'post_id' => Post::factory(),
            'author_id' => User::factory(),
        ];
    }

    /**
     * Комментарий для конкретного поста.
     */
    public function forPost(Post $post): static
    {
        return $this->state(fn (array $attributes) => [
            'post_id' => $post->id,
        ]);
    }

    /**
     * Комментарий от конкретного пользователя.
     */
    public function fromUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'author_id' => $user->id,
        ]);
    }
}
