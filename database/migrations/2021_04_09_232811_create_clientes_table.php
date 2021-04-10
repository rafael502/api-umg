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
            $table->id('DPI');
            $table->string('PrimerNombre');
            $table->string('SegundoNombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->string('Num_Telefono');
            $table->integer('idTipoCliente');
            $table->integer('idDireDomi');
            $table->integer('idCorreo');
            $table->integer('estado');
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
