<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_parentescos')->insert([
            'nombre' => 'PADRE',
        ]);
        DB::table('rh_cl_parentescos')->insert([
            'nombre' => 'MADRE',
        ]);
        DB::table('rh_cl_parentescos')->insert([
            'nombre' => 'HIJO',
        ]);
        DB::table('rh_cl_parentescos')->insert([
            'nombre' => 'HERMANO',
        ]);
    }
}
