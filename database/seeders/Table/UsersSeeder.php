<?php

namespace Database\Seeders\Table;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => 'operator@gmail.com',
                'password' => Hash::make('operator'),
                'password_rand' => 'operator',
                'nama_lengkap' => 'Operator IHSAO',
                'role' => 'admin',
            ],
            [
                'id' => 2,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'password_rand' => '12345678',
                'nama_lengkap' => 'Admin IHSAO',
                'role' => 'admin',
            ],
            [
                'id' => 3,
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('12345678'),
                'password_rand' => '12345678',
                'nama_lengkap' => 'Admin 2 IHSAO',
                'role' => 'admin',
            ],
            [
                'id' => 4,
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('12345678'),
                'password_rand' => '12345678',
                'nama_lengkap' => 'Admin 3 IHSAO',
                'role' => 'admin',
            ],
            [
                'id' => 5,
                'email' => 'admin4@gmail.com',
                'password' => Hash::make('12345678'),
                'password_rand' => '12345678',
                'nama_lengkap' => 'Admin 3 IHSAO',
                'role' => 'admin',
            ],
            [
                'id' => 6,
                'email' => 'peserta@gmail.com',
                'password' => Hash::make('12345678'),
                'password_rand' => '12345678',
                'nama_lengkap' => 'Peserta 3 IHSAO',
                'role' => 'sma',
            ],

        ]);
    }
}
