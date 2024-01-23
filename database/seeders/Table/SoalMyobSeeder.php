<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoalMyobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('soal_myob')->insert([
            'id' => 1,
            'pertanyaan' => 'Siapa penemu hp?',
            'file_soal' => 'soal.xlxs',
            'cabang_lomba_id' => 3,
            'babak_id' => 7,
        ]);
    }
}
