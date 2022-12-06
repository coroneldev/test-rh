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
        Schema::create('rh_trn_personas', function (Blueprint $table) {
            $table->id();
            $table->string('paterno',50)->nullable();
            $table->string('materno',50)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('cedula_identidad',20)->nullable();
            $table->string('expedido_ci' ,15)->nullable();
            $table->string('complemento_ci', 5)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono_fijo',15)->nullable();
            $table->string('telefono_movil',15)->nullable();
            $table->string('correo_electronico',50)->nullable();
            $table->string('nro_nua_afp',30)->nullable();
            $table->string('nombre_afp',50)->nullable();
            $table->string('libreta_militar',20)->nullable();
            $table->string('grupo_sanguineo',5)->nullable();
            $table->string('nombre_banco',50)->nullable();
            $table->string('nro_cuenta_bancaria',50)->nullable();
            $table->string('nro_nit',30)->nullable();
            $table->string('nombre_seguro',50)->nullable();
            $table->string('nro_seguro_medico',15)->nullable();
            $table->boolean('licencia_conducir')->nullable();
            $table->string('licencia_categoria',10)->nullable();
            $table->unsignedBigInteger('adjunto_id')->nullable();
            $table->foreign('adjunto_id')->references('id')->on('rh_trn_adjuntos');
            $table->text('domicilio', 255)->nullable();
            $table->unsignedBigInteger('estado_civil_id')->nullable();
            $table->foreign('estado_civil_id')->references('id')->on('rh_cl_estados_civiles');
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->foreign('genero_id')->references('id')->on('rh_cl_generos');
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('rh_cl_paises');
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('rh_cl_ciudades');
            $table->boolean('cas')->nullable();
            $table->string('nro_cas')->nullable();
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
        Schema::dropIfExists('rh_trn_personas');
    }
};
