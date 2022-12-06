<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnExperienciaLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_experiencias_laborales')->insert([
            'lugar_trabajo'                => 'EMPRESA FERROVIARIA',
            'fecha_inicio'                 => '2020-10-10',
            'fecha_fin'                    => '2020-10-10',
            'cargo_desempeniado'           => 'PROGRAMADOR DE SISTEMAS',
            'funcion_desempeniada'         => 'DESARROLLAR SISTEMAS DE INF',
            'nombre_inmediato_sup'         => 'jUAN  PEREZ',
            'cargo_inmediato_sup'          => 'JEFE DE SISTEMAS',
            'salario_percibido'            =>  5000.60,
            'motivo_desvinculacion'        => 'CULMINACION DE CONTRATO',
            'persona_id'                   =>  1,
            'adjunto_id'                   =>  1,
        ]);
    }
}
