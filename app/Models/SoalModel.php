<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SoalModel extends Model
{
    use HasFactory;
    protected $table = 'soal';
    protected $fillable = [
        'pernyataan', 'gambar', 'pertanyaan', 'cabang_lomba_id', 'babak_id'
    ];
    public function pilihan(): HasOne
    {
        return $this->hasOne(PilihanModel::class, 'soal_id', 'id')->where('isTrue', 1);
    }
    
    public function pilihanSemua(): HasMany
    {
        return $this->hasMany(PilihanModel::class, 'soal_id', 'id')->inRandomOrder();
    }

    public function cabangLomba(): HasOne
    {
        return $this->hasOne(CabangLombaModel::class, 'id', 'cabang_lomba_id');
    }

    public function babak(): HasOne
    {
        return $this->hasOne(BabakModel::class, 'id', 'babak_id');
    }
}
