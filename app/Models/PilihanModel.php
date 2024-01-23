<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanModel extends Model
{
    use HasFactory;
    protected $table = 'pilihan';

    protected $fillable = [
        'deskripsi', 'isTrue', 'soal_id'
    ];
}
