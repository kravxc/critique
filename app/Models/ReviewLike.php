<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewLike extends Model
{
    use HasFactory;

    protected $fillable = ['review_id', 'user_id', 'type'];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes(): HasMany
    {
        return $this->hasMany(ReviewLike::class);
    }

    public function regularLikes(): HasMany
    {
        return $this->likes()->where('type', 'like');
    }

    public function authorLikes(): HasMany
    {
        return $this->likes()->where('type', 'author_like');
    }

    // Методы для обновления счетчиков
    public function updateLikesCount(): void
    {
        $this->update([
            'likes_count' => $this->regularLikes()->count(),
            'author_likes_count' => $this->authorLikes()->count(),
        ]);
    }
}