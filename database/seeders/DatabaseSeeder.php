<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RhClGeneroSeeder::class);
        $this->call(RhClEstadoCivilSeeder::class);
        $this->call(RhClParentescoSeeder::class);
        $this->call(RhClEstadoSeeder::class);
        $this->call(RhClInstitucionSeeder::class);
        $this->call(RhClIdiomaSeeder::class);
        $this->call(RhClPaisSeeder::class);
        $this->call(RhClCiudadSeeder::class);
        $this->call(RhClGradoSeeder::class);
        $this->call(RhClEstructuraOrganizacionalSeeder::class);
        $this->call(RhClTipoContratoSeeder::class);
        $this->call(RhClAccesoSeeder::class);
        /*Temporal para llenado*/
        $this->call(RhTrnAdjuntoSeeder::class);
        $this->call(RhTrnPersonaSeeder::class);
        $this->call(RhTrnParentescoSeeder::class);
        $this->call(RhTrnIdiomaSeeder::class);
        $this->call(RhTrnFormacionSeeder::class);
        $this->call(RhTrnExperienciaLaboralSeeder::class);
        $this->call(RhTrnCursoSeeder::class);

    }
}
