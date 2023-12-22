<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DosenSeeder::class,
            MahasiswaSeeder::class,
            MataKuliahSeeder::class,
            RelationSeeder::class,
            UserSeeder::class,
        ]);
    }
}
