<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'content_id',
        'user_id',
        'title',
        'text',
        'review_type',
        'likes_count',
        'author_likes_count',
    ];

    protected $casts = [
        'likes_count' => 'integer',
        'author_likes_count' => 'integer',
    ];

    /**
     * Контент рецензии
     */
    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    /**
     * Автор рецензии
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Оценка, связанная с рецензией
     */
    public function rating(): HasOne
    {
        return $this->hasOne(Rating::class);
    }

    /**
     * Scope для полных рецензий
     */
    public function scopeFull($query)
    {
        return $query->where('review_type', 'full');
    }

    /**
     * Scope для мини-рецензий
     */
    public function scopeMini($query)
    {
        return $query->where('review_type', 'mini');
    }

    /**
     * Scope для популярных рецензий
     */
    public function scopePopular($query)
    {
        return $query->orderBy('likes_count', 'desc');
    }
}