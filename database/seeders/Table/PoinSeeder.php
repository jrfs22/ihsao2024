<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('poin')->insert([
            [
                'id' => 1,
                'poin' => 10,
                'cabang_lomba_id' => 1,
                'peserta_id' => 1
            ],
            [
                'id' => 2,
                'poin' => 5,
                'cabang_lomba_id' => 2,
                'peserta_id' => 1
            ],
        ]);
    }
}
