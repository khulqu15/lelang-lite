<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public const LEVEL_ADMIN = 'administrator';
    public const LEVEL_OFFICER = 'petugas';

    public static function getAvailableLevel(): array
    {
        return [
            self::LEVEL_ADMIN,
            self::LEVEL_OFFICER
        ];
    }
}
