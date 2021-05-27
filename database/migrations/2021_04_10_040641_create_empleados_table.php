<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id');
            $table->string('dpi');
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('idDepartamentoEmpleado');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccionDomiciliar');
            $table->unsignedBigInteger('idDepartamento');
            $table->unsignedBigInteger('idMunicipio');
            $table->integer('estado');
            $table->date('fecha');
            $table->foreign('idDepartamentoEmpleado')->references('id')->on('departamentoempleados');
            $table->foreign('idDepartamento')->references('id')->on('departamentos');
            $table->foreign('idMunicipio')->references('id')->on('municipios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
