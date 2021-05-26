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
            $table->integer('idDepartamento');
            $table->integer('idMunicipio');
            $table->string('email');
            $table->string('telefono');
            $table->integer('idTipoCliente');
            $table->integer('estado');
            $table->date('fecha');
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
