<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rh_trn_formaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('provision_nacional');
            $table->string('registro_profesional', 25);
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('rh_cl_paises');
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('rh_cl_ciudades');
            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('rh_cl_estados');
            $table->unsignedBigInteger('grado_id')->nullable();
            $table->foreign('grado_id')->references('id')->on('rh_cl_grados');
            $table->unsignedBigInteger('institucion_id')->nullable();
            $table->foreign('institucion_id')->references('id')->on('rh_cl_instituciones');
            $table->unsignedBigInteger('adjunto_id')->nullable();
            $table->foreign('adjunto_id')->references('id')->on('rh_trn_adjuntos');
            $table->boolean('activo')->default(1);
            $table->boolean('verificado')->default(0);
            $table->boolean('editable')->default(1);
            $table->string('observacion')->nullable();
            $table->boolean('sol_edicion')->default(0);
            $table->string('motivo_sol')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rh_trn_formaciones');
    }
};
