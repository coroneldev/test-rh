<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnDeclaracionJuradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_declaraciones_juradas')->insert([
            'nombre'                =>  'CERTIFICADO REJAB',
            'fecha_inicio'          =>  '2022-08-31',
            'fecha_fin'             =>  '2022-12-31',
            'adjunto_id'            =>   1,
            'persona_id'            =>   1,

        ]);
    }
}
