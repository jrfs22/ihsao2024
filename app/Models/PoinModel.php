<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PoinModel extends Model
{
    use HasFactory;
    protected $table = 'poin';
    protected $fillable = [
        'poin', 'cabang_lomba_id', 'users_id'
    ];

    public function cabangLomba() : BelongsTo
    {
        return $this->belongsTo(CabangLombaModel::class);
    }

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
