<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    protected $table = 'tb_level';

    public function petugas(): HasMany
    {
        return $this->hasMany(Admin::class, 'tb_level_id', 'id');
    }
}
