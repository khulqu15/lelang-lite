<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    public const LEVEL_ADMIN = 'administrator';
    public const LEVEL_OFFICER = 'petugas';

    protected $table = 'tb_petugas';

    public static function getAvailableLevel(): array
    {
        return [
            self::LEVEL_ADMIN,
            self::LEVEL_OFFICER
        ];
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'tb_level_id', 'id');
    }

    public function lelang(): HasMany
    {
        return $this->hasMany(Auction::class, 'tb_petugas_id', 'id');
    }
}
