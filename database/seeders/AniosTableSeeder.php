<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AniosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Consideramos carreras de 3 años
        $data = [
            ['anio' => 1],
            ['anio' => 2],
            ['anio' => 3]
        ];

        DB::table('anios')->insert($data);
    }
}
