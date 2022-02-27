<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    public const STATUS_OPEN = 'buka';
    public const STATUS_CLOSE = 'tutup';

    public static function getAvailableStatus(): array
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSE
        ];
    }
}
