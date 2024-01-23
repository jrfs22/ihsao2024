<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pilihan')->insert([
            [
                'id' => 1,
                'deskripsi' => 'Orang yang nyuri barang',
                'isTrue' => 1,
                'soal_id' => 1
            ],
            [
                'id' => 2,
                'deskripsi' => 'Gak tau',
                'isTrue' => 0,
                'soal_id' => 1
            ]
        ]);
    }
}
