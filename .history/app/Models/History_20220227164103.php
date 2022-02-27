<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;

    protected $table = 'history_lelang';

    public function lelang(): BelongsTo
    {
        return $this->belongsTo(Auction::class, 'tb_lelang_id', 'id');
    }
}
