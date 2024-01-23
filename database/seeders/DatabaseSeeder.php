<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Table\BabakSeeder;
use Database\Seeders\Table\CabangLombaSeeder;
use Database\Seeders\Table\JawabanMyobSeeder;
use Database\Seeders\Table\JawabanSeeder;
use Database\Seeders\Table\PesertaLombaSeeder;
use Database\Seeders\Table\PilihanSeeder;
use Database\Seeders\Table\PoinSeeder;
use Database\Seeders\Table\SoalLombaSeeder;
use Database\Seeders\Table\SoalMyobSeeder;
use Database\Seeders\Table\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CabangLombaSeeder::class,
            BabakSeeder::class,
            UsersSeeder::class,
            PesertaLombaSeeder::class,
            SoalLombaSeeder::class,
            PilihanSeeder::class,
            JawabanSeeder::class,
            SoalMyobSeeder::class,
            JawabanMyobSeeder::class,
            PoinSeeder::class
        ]);
    }
}
