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
        Schema::create('rh_trn_parentescos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('rh_trn_personas');
            $table->unsignedBigInteger('parentesco_id')->nullable();
            $table->foreign('parentesco_id')->references('id')->on('rh_cl_parentescos');
            $table->string('nombres',50);
            $table->string('apellidos',100);
            $table->string('cedula_identidad',20)->nullable();
            $table->text('direccion_laboral');
            $table->text('direccion_parentesco');
            $table->string('correo_electronico',50)->nullable();
            $table->string('telefono')->nullable();
            $table->boolean('activo')->default(1);
            $table->boolean('verificado')->default(0);
            $table->boolean('editable')->default(1);
            $table->string('observacion')->nullable();
            $table->boolean('sol_edicion')->default(0);
            $table->string('motivo_sol')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('rh_trn_parentescos');
    }
};
