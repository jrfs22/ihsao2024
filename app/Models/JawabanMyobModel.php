<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanMyobModel extends Model
{
    use HasFactory;
    protected $table = 'jawaban_myob';
    protected $fillable = [
        'file1', 'file2', 'file3', 'file4', 'file5', 'file6', 'soal_myob_id', 'peserta_id'
    ];
}
