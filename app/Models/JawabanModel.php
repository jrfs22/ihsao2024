<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanModel extends Model
{
    use HasFactory;
    protected $table = 'jawaban';
    protected $fillable = [
        'peserta_id', 'soal_id', 'pilihan_id'
    ];
}
