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
            $table->integer('idCliente');
            $table->integer('idMedidor');
            $table->integer('idTipoMedidor');
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
        Schema::dropIfExists('cliente_medidors');
    }
}
