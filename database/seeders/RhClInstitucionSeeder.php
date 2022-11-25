<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClInstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_instituciones')->insert([
            'nombre' => 'UNIVERSIDAD MAYOR DE SAN ANRES',
            'sigla' => 'UMSA',
            'tipo_institucion' => 'PUBLICO',
        ]);

        DB::table('rh_cl_instituciones')->insert([
            'nombre' => 'UNIVERSIDAD PUBLICA DE EL ALTO ',
            'sigla' => 'UPEA',
            'tipo_institucion' => 'PUBLICO',
        ]);

        DB::table('rh_cl_instituciones')->insert([
            'nombre' => 'UNIVERSIDAD TECNOLOGICA DE BOLIVIA ',
            'sigla' => 'UTB',
            'tipo_institucion' => 'PRIVADO',
        ]);
    }
}
