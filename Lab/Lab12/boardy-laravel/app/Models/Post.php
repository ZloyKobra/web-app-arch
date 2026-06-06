<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * Атрибуты, которые можно массово назначать.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'author_id',
    ];

    /**
     * Атрибуты, которые нужно преобразовывать.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * Получить автора поста (связь с User).
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Получить все комментарии поста.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    /**
     * Scope для поиска постов по заголовку.
     */
    public function scopeSearch($query, ?string $search)
    {
        return $query->when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                        ->orWhere('body', 'like', "%{$search}%");
        });
    }

    /**
     * Scope для получения постов по автору.
     */
    public function scopeByAuthor($query, int $authorId)
    {
        return $query->where('author_id', $authorId);
    }

    /**
     * Scope для получения последних постов.
     */
    public function scopeLatestPosts($query, int $limit = 10)
    {
        return $query->latest()->limit($limit);
    }
}
