<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Sede::factory(3)->create();
        \App\Models\Carrera::factory(10)->create();
        \App\Models\Profesor::factory(10)->create();
        $this->call(AniosTableSeeder::class);
        $this->call(LlamadosTableSeeder::class);
        $this->call(DivisionesTableSeeder::class);
        \App\Models\Materia::factory(10)->create();
        \App\Models\Examen::factory(10)->create();
    }
}
