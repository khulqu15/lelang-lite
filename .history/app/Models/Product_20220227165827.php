<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tb_barang';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_barang',
        'tgl',
        'harga_awal',
        'deskripsi_barang'
    ];

    public function histori(): HasMany
    {
        return $this->hasMany(History::class, 'tb_lelang_id', 'id');
    }

    public function lelang(): HasMany
    {
        return $this->hasMany(Auction::class, 'tb_lelang', 'id');
    }
}
