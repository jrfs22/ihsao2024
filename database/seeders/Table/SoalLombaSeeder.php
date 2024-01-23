<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoalLombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('soal')->insert([
            'id' => 1,
            'pertanyaan' => 'Apakah Yang maksud oleh Maling?',
            'cabang_lomba_id' => 1,
            'babak_id' => 1,
        ]);
    }
}
