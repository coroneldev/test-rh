<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClAccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_accesos')->insert([
            'nombre'         =>  'SISTEMA DE CORRESPONDENCIA',
            'observacion'    =>  '0',
        ]);
    }
}
