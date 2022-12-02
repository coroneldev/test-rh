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
        Schema::create('rh_trn_datos_laborales', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('motivo_desvinculacion', 50);
            
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');

            $table->unsignedBigInteger('cargo_id')->nullable();
            $table->foreign('cargo_id')->references('id')->on('rh_cl_cargos');

            $table->unsignedBigInteger('estructura_organizacional_id')->nullable();
            $table->foreign('estructura_organizacional_id')->references('id')->on('rh_cl_estructuras_organizacionales');

            $table->unsignedBigInteger('tipo_contrato_id')->nullable();
            $table->foreign('tipo_contrato_id')->references('id')->on('rh_cl_tipos_contratos');

            $table->unsignedBigInteger('adjunto_id')->nullable();
            $table->foreign('adjunto_id')->references('id')->on('rh_trn_adjuntos');

            $table->unsignedBigInteger('estado_id')->nullable();
            $table->foreign('estado_id')->references('id')->on('rh_cl_estados');

            $table->unsignedBigInteger('horario_id')->nullable();
            $table->foreign('horario_id')->references('id')->on('rh_cl_horarios');

            $table->unsignedBigInteger('organizmo_financiador_id')->nullable();
            $table->foreign('organizmo_financiador_id')->references('id')->on('rh_cl_organizmos_financiadores');

            $table->unsignedBigInteger('puesto_id')->nullable();
            $table->foreign('puesto_id')->references('id')->on('rh_cl_puestos');

            $table->unsignedBigInteger('acceso_id')->nullable();
            $table->foreign('acceso_id')->references('id')->on('rh_cl_accesos');

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
        Schema::dropIfExists('rh_trn_datos_laborales');
    }
};
