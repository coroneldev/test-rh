<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnFormacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_formaciones')->insert([
            'titulo'                => 'LICENCIADO EN INFORMATICA',
            'fecha_inicio'          => '2021-10-10',
            'fecha_fin'             => '2020-10-10',
            'provision_nacional'    => 'TRUE',
            'registro_profesional'  => '123456',
            'persona_id'            =>  1,
            'pais_id'               =>  1,
            'ciudad_id'             =>  1,
            'estado_id'             =>  1,
            'grado_id'              =>  1,
            'institucion_id'        =>  1,
            'adjunto_id'            =>  1,
        ]);
    }
}
