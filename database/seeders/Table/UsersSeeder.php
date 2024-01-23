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
            'id' => 1,
            'email' => 'josep@gmail.com',
            'password' => Hash::make('12345678'),
            'password_rand' => '12345678',
            'nama_lengkap' => 'Josep Ronaldo Francis Siregar',
            'role' => 'admin',
        ]);
    }
}
