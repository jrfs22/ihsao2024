<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jawaban')->insert([
            'id' => 1,
            'peserta_id' => 1,
            'soal_id' => 1,
            'pilihan_id' => 1
        ]);
    }
}
