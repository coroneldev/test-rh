<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnAdjuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_adjuntos')->insert([
            'path'        => 'ubicacion del archivo para recuperar',
           // 'tipo'        => 'FOTO',
            'nombre'      => '6833022.LP'
        ]);
    }
}
