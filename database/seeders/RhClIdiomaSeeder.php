<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClIdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_idiomas')->insert([
            'sigla' => 'AIM',
            'nombre' => 'AIMARA',
        ]);
        DB::table('rh_cl_idiomas')->insert([
            'sigla' => 'ING',
            'nombre' => 'INGLES',
        ]);
    }
}
