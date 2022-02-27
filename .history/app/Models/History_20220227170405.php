<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;

    protected $table = 'history_lelang';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tb_lelang_id',
        'tb_barang_id',
        'tb_masyarakat_id',
        'penawaran_harga',
    ];

    public function lelang(): BelongsTo
    {
        return $this->belongsTo(Auction::class, 'tb_lelang_id', 'id');
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'tb_barang_id', 'id');
    }

    public function masyarakat(): BelongsTo
    {
        return $this->belongsTo(User::class, 'tb_masyarakat_id', 'id');
    }
}
