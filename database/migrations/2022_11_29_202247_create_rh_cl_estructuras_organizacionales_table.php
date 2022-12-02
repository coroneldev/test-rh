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
        Schema::create('rh_cl_estructuras_organizacionales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('sigla', 15);
            $table->string('dependencia', 50);
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
        Schema::dropIfExists('rh_cl_estructuras_organizacionales');
    }
};
