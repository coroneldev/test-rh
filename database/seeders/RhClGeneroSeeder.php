<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_generos')->insert([
            'sigla' => 'M',
            'nombre' => 'MASCULINO',
        ]);
        DB::table('rh_cl_generos')->insert([
            'sigla' => 'F',
            'nombre' => 'FEMENINO',
        ]);
        DB::table('rh_cl_generos')->insert([
            'sigla' => 'N',
            'nombre' => 'NO RESPONDE',
        ]);
    }
}
