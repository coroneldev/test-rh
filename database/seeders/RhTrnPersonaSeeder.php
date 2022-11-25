<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_personas')->insert([
            'paterno' => 'CORONEL',
            'materno' =>  'LAZO',
            'nombres' => 'REYNALDO',
            'cedula_identidad' =>  '6833022',
            'expedido_ci' => 'LP',
            'complemento_ci' =>  '1',
            'fecha_nacimiento' => '1985-02-28',
            'telefono_fijo' =>  '2842850',
            'telefono_movil' => '76225702',
            'correo_electronico' =>  'RCORONEL@GMAIL.COM',
            'nro_nua_afp' => '1234567879',
            'nombre_afp' =>  'BBVA',
            'libreta_militar' => '988754',
            'grupo_sanguineo' =>  'OR+',
            'nombre_banco' =>  'BANCO UNION',
            'nro_cuenta_bancaria' => '875498653265',
            'nro_nit' =>  '6833022018',
            'nro_seguro_medico' => '659832',
            'licencia_conducir' => '1',
            'licencia_categoria' => 'A',
            'adjunto_id' => '1',
            'domicilio' => 'CALLE MANUEL CARPIO NRO 22',
            'estado_civil_id' =>  '1',
            'genero_id' =>  '1',
            'pais_id' =>  '1',
            'ciudad_id' =>  '1',
            'cas' =>  'TRUE',
            'nro_cas' =>  '21',

        ]);
    }
}
