<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GunungSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(PengunjungSeeder::class);
    }
}
