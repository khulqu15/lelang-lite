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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tb_barang_id',
        'tgl_lelang',
        'harga_akhir',
        'tb_masyarakat_id',
        'tb_petugas_id',
        'status',
    ];

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

    public function histori(): HasMany
    {
        return $this->hasMany(History::class, 'tb_lelang_id', 'id');
    }

    public function masyarakat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'tb_masyarakat_id', 'id');
    }

    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'tb_petugas_id', 'id');
    }
}
