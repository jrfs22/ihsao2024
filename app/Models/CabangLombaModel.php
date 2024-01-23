<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CabangLombaModel extends Model
{
    use HasFactory;
    protected $table = 'cabang_lomba';
    protected $fillable = [
        'nama'
    ];

    public function peserta() : BelongsTo {
        return $this->belongsTo(PesertaModel::class, 'peserta_id', 'id');
    }

    public function poin() : BelongsTo {
        return $this->belongsTo(PoinModel::class, 'id', 'cabang_lomba_id');
    }
}
