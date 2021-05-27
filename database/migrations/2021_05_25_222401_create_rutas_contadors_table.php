<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasContadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas_contadors', function (Blueprint $table) {
            $table->id('id');
            $table->string('descripcion');
            $table->unsignedBigInteger('idMedidor');
            $table->integer('estado');
            $table->date('fecha');
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
        Schema::dropIfExists('rutas_contadors');
    }
}
