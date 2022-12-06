<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RhTrnCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_cursos')->insert([
            'fecha_inicio'     =>  '2022-01-01',
            'fecha_fin'        =>  '2022-12-31',
            'nombre'           =>  'PROGRAMACION DE SISTEMAS',
            'duracion'         =>  '11 MESES',
            'estado_id'        =>   1,
            'institucion_id'   =>   1,
            'persona_id'       =>   1,
            'adjunto_id'       =>   1, 
            'tipo'             =>  'SEMINARIO',
            'conocimiento'     =>  'REGULAR',
        ]);
    }
}
