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
        Schema::create('rh_trn_experiencias_laborales', function (Blueprint $table) {
            $table->id();
            $table->string('lugar_trabajo', 100);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('cargo_desempeniado', 50);
            $table->string('funcion_desempeniada', 50);
            $table->string('nombre_inmediato_sup', 50);
            $table->string('cargo_inmediato_sup', 50);
            $table->decimal('salario_percibido', 8,2 );
            $table->string('motivo_desvinculacion', 50);
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
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
        Schema::dropIfExists('rh_trn_experiencias_laborales');
    }
};
