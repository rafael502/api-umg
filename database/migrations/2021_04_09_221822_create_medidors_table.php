<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidors', function (Blueprint $table) {
            $table->id('id');
            $table->string('medidor');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('idTipoMedidor');
            $table->string('descripcion');
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
        Schema::dropIfExists('medidors');
    }
}
