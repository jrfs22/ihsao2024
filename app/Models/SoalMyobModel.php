<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class   SoalMyobModel extends Model
{
    use HasFactory;
    protected $table = 'soal_myob';
    protected $fillable = [
        'pertanyaan', 'file_soal', 'cabang_lomba_id', 'babak_id'
    ];

    public function cabangLomba(): HasOne
    {
        return $this->hasOne(CabangLombaModel::class, 'id', 'cabang_lomba_id');
    }

    public function babak(): HasOne
    {
        return $this->hasOne(BabakModel::class, 'id', 'babak_id');
    }
}
