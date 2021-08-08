<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Noticia::factory()->count(25)->create();
    }
}
