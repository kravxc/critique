<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'content_text',
        'music_type',
        'artist',
        'genre',
        'release_date',
        'cover_image',
        'label',
        'favorites_count',
        'reviews_count',
        'average_rating',
        'added_by',
    ];

    protected $casts = [
        'release_date' => 'date',
    ];

    /**
     * Пользователь, добавивший контент
     */
    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    /**
     * Рецензии на контент
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Оценки контента
     */
    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    /**
     * Scope для поиска по жанру
     */
    public function scopeByGenre($query, $genre)
    {
        return $query->where('genre', $genre);
    }

    /**
     * Scope для музыки
     */
    public function scopeMusic($query)
    {
        return $query->whereNotNull('music_type');
    }
}