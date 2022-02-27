<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Model
{
    use HasFactory;

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
}
