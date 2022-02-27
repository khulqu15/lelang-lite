<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auction extends Model
{
    use HasFactory;

    public const STATUS_OPEN = 'buka';
    public const STATUS_CLOSE = 'tutup';

    protected $table = 'tb_lelang';

    public static function getAvailableStatus(): array
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSE
        ];
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'tb_barang_id', 'id');
    }

    public function history(): HasMany
    {
        return $this->hasMany(History::class, 'tb_lelang_id', 'id');
    }
}
