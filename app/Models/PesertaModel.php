<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PesertaModel extends Model
{
    use HasFactory;
    protected $table = 'peserta';
    protected $fillable = [
        'asal_sekolah', 'users_id', 'cabang_lomba_id'
    ];

    public function cabang_lomba() : BelongsTo {
        return $this->belongsTo(CabangLombaModel::class, 'cabang_lomba_id', 'id');
    }

    // public function users() : BelongsTo {
    //     return $this->belongsTo(User::class, 'users_id', 'id');
    // }

    // public function poin() : HasMany {
    //     return $this->hasMany(PoinModel::class, 'id', 'peserta_id');
    // }

    public function babak() : HasOne {
        return $this->hasOne(BabakModel::class, 'cabang_lomba_id', 'cabang_lomba_id')->orderBy('waktu_mulai', 'asc');
    }
}

