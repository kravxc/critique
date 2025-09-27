<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ratings extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'user_id',
        'rating',
        'rating_type',
        'detailed_ratings',
        'review_id',
    ];

    protected $casts = [
        'detailed_ratings' => 'array',
        'rating' => 'integer',
    ];

    /**
     * Оцениваемый контент
     */
    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }

    /**
     * Пользователь, поставивший оценку
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Рецензия, связанная с оценкой
     */
    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }

    /**
     * Scope для простых оценок
     */
    public function scopeSimple($query)
    {
        return $query->where('rating_type', 'simple');
    }

    /**
     * Scope для детальных оценок
     */
    public function scopeDetailed($query)
    {
        return $query->where('rating_type', 'detailed');
    }

    /**
     * Scope для высоких оценок
     */
    public function scopeHighRating($query, $minRating = 4)
    {
        return $query->where('rating', '>=', $minRating);
    }
}