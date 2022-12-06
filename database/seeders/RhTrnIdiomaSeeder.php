<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnIdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_idiomas')->insert([
            'nivel_conocimiento'     => 75,
            'persona_id'             =>  1,
            'idioma_id'              =>  1,
            'adjunto_id'             =>  1,
            'estado_id'              =>  1,
        ]);
    }
}
