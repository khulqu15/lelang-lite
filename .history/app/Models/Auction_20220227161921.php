<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    public const LEVEL_OPEN = 'buka';
    public const LEVEL_CLOSE = 'tutup';

    public static function getAvailableStatus(): array
    {
        return [
            self::LEVEL_OPEN,
            self::LEVEL_CLOSE
        ];
    }
}
