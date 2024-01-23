<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BabakModel extends Model
{
    use HasFactory;
    protected $table = 'babak';

    protected $fillable = [
        'nama_babak', 'waktu_mulai', 'lama_pengerjaan', 'kode_soal', 'cabang_lomba_id'
    ];

    public function cabangLomba() : HasOne
    {
        return $this->hasOne(CabangLombaModel::class, 'id', 'cabang_lomba_id');
    }
}
