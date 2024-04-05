<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesertaLombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peserta')->insert([
            [
                'id' => 1,
                'asal_sekolah' => 'SMKN 2 Pekanbaru',
                'nama_tim' => 'SMKN 2 Pekanbaru (1)',
                'users_id' => 6,
                'cabang_lomba_id' => 1,
            ]
        ]);
    }   
}
