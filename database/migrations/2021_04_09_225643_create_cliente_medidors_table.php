<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteMedidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_medidors', function (Blueprint $table) {
            $table->id('id');
            $table->integer('nis');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idMedidor');
            $table->integer('estado');
            $table->date('fecha');
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->foreign('idMedidor')->references('id')->on('medidors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_medidors');
    }
}
