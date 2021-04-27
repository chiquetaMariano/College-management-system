<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DivisionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['division' => 'A'],
            ['division' => 'B']
        ];
        
        DB::table('divisiones')->insert($data);
    }
}
