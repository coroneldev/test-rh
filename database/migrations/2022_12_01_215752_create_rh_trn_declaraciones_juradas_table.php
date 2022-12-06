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
        Schema::create('rh_trn_declaraciones_juradas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 25);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedBigInteger('adjunto_id')->nullable();
            $table->foreign('adjunto_id')->references('id')->on('rh_trn_adjuntos');
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
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
        Schema::dropIfExists('rh_trn_declaraciones_juradas');
    }
};
