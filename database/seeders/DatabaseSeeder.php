<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Models\Montadora;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Montadora::factory(10)->create();
    }
}
