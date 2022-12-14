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
            'paterno'               =>  'CONTRERAS',
            'materno'               =>  'VASQUEZ',
            'nombres'               =>  'ARNOLD',
            'cedula_identidad'      =>  '6120501',
            'expedido_ci'           =>  'LP',
            'complemento_ci'        =>  '1',
            'fecha_nacimiento'      =>  '1900-02-02',
            'telefono_fijo'         =>  '2818181',
            'telefono_movil'        =>  '70000000',
            'correo_electronico'    =>  'C_ARNOLD@GMAIL.COM',
            'nro_nua_afp'           =>  '1234567879',
            'nombre_afp'            =>  'BBVA',
            'libreta_militar'       =>  '988754',
            'grupo_sanguineo'       =>  'OR+',
            'nombre_banco'          =>  'BANCO UNION S. A.',
            'nro_cuenta_bancaria'   =>  '875498653265',
            'nro_nit'               =>  '6120501018',
            'nombre_seguro'         =>  'CAJA PETROLERA',
            'nro_seguro_medico'     =>  '659832',
            'licencia_conducir'     =>  'TRUE',
            'licencia_categoria'    =>  'A',
            'adjunto_id'            =>   1,
            'domicilio'             =>  'ESQUINA ASPIAZU NRO 54, ZONA SOPOCACHI',
            'estado_civil_id'       =>   1,
            'genero_id'             =>   1,
            'pais_id'               =>   1,
            'ciudad_id'             =>   1,
            'cas'                   =>  'TRUE',
            'nro_cas'               =>  '21',

        ]);
    }
}
