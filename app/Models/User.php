<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'bio',
        'avatar',
        'preferences',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'preferences' => 'array',
    ];

    /**
     * Роль пользователя
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Контент, добавленный пользователем
     */
    public function contents(): HasMany
    {
        return $this->hasMany(Content::class, 'added_by');
    }

    /**
     * Рецензии пользователя
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Оценки пользователя
     */
    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class);
    }

    /**
     * Проверка роли пользователя
     */
    public function hasRole($roleName): bool
    {
        return $this->role->name === $roleName;
    }

    /**
     * Проверка прав через роль
     */
    public function hasPermission($permissionName): bool
    {
        return $this->role->permissions()->where('name', $permissionName)->exists();
    }
}