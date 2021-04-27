<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LlamadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['llamado' => 'febrero'],
            ['llamado' => 'marzo'],
            ['llamado' => 'agosto'],
            ['llamado' => 'noviembre'],
            ['llamado' => 'diciembre'],
        ];

        DB::table('llamados')->insert($data);
    }
}
