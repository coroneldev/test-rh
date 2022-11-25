<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClEstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_estados_civiles')->insert([
            'sigla' =>  'CAS',
            'nombre' => 'CASADO',
        ]);
        DB::table('rh_cl_estados_civiles')->insert([
            'sigla' =>  'SOL',
            'nombre' => 'SOLTERO',
        ]);
        DB::table('rh_cl_estados_civiles')->insert([
            'sigla' =>  'VIU',
            'nombre' => 'VIUDO',
        ]);
        DB::table('rh_cl_estados_civiles')->insert([
            'sigla' =>  'DIV',
            'nombre' => 'DIVORCIADO',
        ]);
    }
}
