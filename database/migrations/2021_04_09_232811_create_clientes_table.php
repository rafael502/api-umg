<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id');
            $table->string('dpi');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('nit');
            $table->string('direccionDomiciliar');
            $table->unsignedBigInteger('idDepartamento');
            $table->unsignedBigInteger('idMunicipio');
            $table->string('email');
            $table->string('telefono');
            $table->unsignedBigInteger('idTipoCliente');
            $table->integer('estado');
            $table->date('fecha');
            $table->foreign('idDepartamento')->references('id')->on('departamentos');
            $table->foreign('idMunicipio')->references('id')->on('municipios');
            $table->foreign('idTipoCliente')->references('id')->on('tipo_clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
