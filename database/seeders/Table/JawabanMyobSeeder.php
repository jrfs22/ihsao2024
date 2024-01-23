<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanMyobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jawaban_myob')->insert([
            'id' => 1,
            'file1' => 'file1.pdf',
            'file2' => 'file2.pdf',
            'file3' => 'file3.pdf',
            'file4' => 'file4.pdf',
            'file5' => 'file5.pdf',
            'file6' => 'file6.pdf',
            'soal_myob_id' => 1,
            'peserta_id' => 1
        ]);
    }
}
