<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CabangLombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabang_lomba')->insert([
            [
                'id' => 1,
                'nama' => 'Olimpiade SMA'
            ],
            [
                'id' => 2,
                'nama' => 'Olimpiade SMK',
            ],
            [
                'id' => 3,
                'nama' => 'MYOB',
            ]
        ]);
    }
}
