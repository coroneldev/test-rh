<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClCiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'LA PAZ',
            'sigla' =>  'LP',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'COCHABAMBA',
            'sigla' =>  'CB',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'ORURO',
            'sigla' =>  'OR',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'CHUQUISACA',
            'sigla' =>  'CH',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'POTOSI',
            'sigla' =>  'PT',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'TARIJA',
            'sigla' =>  'TJ',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'SANTA CRUZ',
            'sigla' =>  'SC',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'BENI',
            'sigla' =>  'BE',
        ]);
        DB::table('rh_cl_ciudades')->insert([
            'nombre' => 'PANDO',
            'sigla' =>  'PD',
        ]);
        
    }
}
