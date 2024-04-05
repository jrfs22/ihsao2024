<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('babak')->insert([
            [
                'id' => 1,
                'nama_babak' => 'Penyisihan',
                'waktu_mulai' => '2024-01-26 08:00:00',
                'lama_pengerjaan' => '02:00:00',
                'kode_soal' => '4d5e6f',
                'cabang_lomba_id' => 1,
            ],
            [
                'id' => 2,
                'nama_babak' => 'Semi Final',
                'waktu_mulai' => '2024-01-24 08:58:24',
                'lama_pengerjaan' => '00:58:24',
                'kode_soal' => '7g8h9i',
                'cabang_lomba_id' => 1,
            ],
            [
                'id' => 3,
                'nama_babak' => 'Penyisihan',
                'waktu_mulai' => '2024-01-24 08:00:00',
                'lama_pengerjaan' => '02:00:00',
                'kode_soal' => 'j0k1l2m',
                'cabang_lomba_id' => 2,
            ],
            [
                'id' => 4,
                'nama_babak' => 'Semi Final',
                'waktu_mulai' => '2024-01-27 08:00:00',
                'lama_pengerjaan' => '00:58:24',
                'kode_soal' => 'r6s7t8u',
                'cabang_lomba_id' => 2,
            ],
            [
                'id' => 5,
                'nama_babak' => 'Penyisihan',
                'waktu_mulai' => '2024-01-27 08:00:00',
                'lama_pengerjaan' => '00:58:24',
                'kode_soal' => 'z2A3B4C',
                'cabang_lomba_id' => 3,
            ],
            [
                'id' => 6,
                'nama_babak' => 'Semi Final',
                'waktu_mulai' => '2024-01-27 08:00:00',
                'lama_pengerjaan' => '00:58:24',
                'kode_soal' => 'D5E6F7G',
                'cabang_lomba_id' => 3,
            ],
            [
                'id' => 7,
                'nama_babak' => 'Final',
                'waktu_mulai' => '2024-01-27 08:00:00',
                'lama_pengerjaan' => '00:58:24',
                'kode_soal' => 'i1a9n0p',
                'cabang_lomba_id' => 3,
            ]
        ]);
    }
}
