<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6, 10),
            'body' => fake()->paragraphs(3, 8),
            'author_id' => User::factory(),
        ];
    }

    /**
     * Пост с конкретным автором.
     */
    public function forUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'author_id' => $user->id,
        ]);
    }

    /**
     * Пост с заданным заголовком.
     */
    public function titled(string $title): static
    {
        return $this->state(fn (array $attributes) => [
            'title' => $title,
        ]);
    }

    /**
     * Пост с комментариями.
     */
    public function withComments(int $count = 3): static
    {
        return $this->afterCreating(function (Post $post) use ($count) {
            CommentFactory::new()
                ->count($count)
                ->forPost($post)
                ->create();
        });
    }
}
