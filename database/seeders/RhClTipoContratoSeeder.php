<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RhClTipoContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_tipos_contratos')->insert([
            'nombre' => 'CONSULTORIA DE LINEA',
        ]);
        DB::table('rh_cl_tipos_contratos')->insert([
            'nombre' => 'CONSULTORIA POR PRODUCTO',
        ]);
        DB::table('rh_cl_tipos_contratos')->insert([
            'nombre' => 'OTROS SERVICIOS',
        ]);
    }
}
