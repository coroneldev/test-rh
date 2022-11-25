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
        Schema::create('rh_trn_idiomas', function (Blueprint $table) {
            $table->id();
            $table->integer('nivel_conocimiento');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            $table->unsignedBigInteger('idioma_id');
            $table->foreign('idioma_id')->references('id')->on('rh_cl_idiomas');
            $table->unsignedBigInteger('adjunto_id');
            $table->foreign('adjunto_id')->references('id')->on('rh_trn_adjuntos');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('rh_cl_estados');

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
        Schema::dropIfExists('rh_trn_idiomas');
    }
};
