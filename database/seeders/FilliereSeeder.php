<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Seeder;

class FilliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filiere::create(['nom' => 'DI']);
        Filiere::create(['nom' => 'RT']);
        Filiere::create(['nom' => 'JRH']);
    }
}
