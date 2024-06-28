<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->string('id_tipo_incidencia', 11);
            $table->string('emisor_nombre', 255);
            $table->string('emisor_telefono', 255);
            $table->string('emisor_reporte', 255);
            $table->string('fecha_apertura', 255); // debe ser automatico
            $table->string('fecha_clausura', 255); // debe ser automatico
            $table->string('direccion_accidente', 255);
            $table->string('receptor_nombre', 255);
            $table->string('id_equipo_asignado', 255);
            $table->string('bitacora', 255);
            $table->string('estatus', 255);
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
        Schema::dropIfExists('incidencias');
    }
}
