<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('telefono_principal',20)->nullable();
            $table->string('telefono_opcional',20)->nullable();
            $table->string('especialidad',100)->nullable();
            $table->string('clinica_instituto',100)->nullable();
            $table->string('ciudad',100)->nullable();
            $table->string('pais',100)->default('Colombia');
            $table->string('email',100)->nullable();
            $table->longText('equipos_interes')->nullable();
            $table->char('conoce_mortara',2)->default('SI');
            $table->string('cual_equipo',200)->nullable();
            $table->string('valoracion_equipos',15)->nullable();
            $table->longText('como_conocio')->nullable();
            $table->char('usaria_mortara',2)->default('SI');
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
        Schema::drop('suscribers');
    }
}
