<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosfacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosfacturas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idEmpleado');
            $table->integer('idClienteMedidor');
            $table->float('tarifa', 8, 2);
            $table->float('precio', 8, 2);
            $table->string('concepto');
            $table->string('lecturaAnterior');
            $table->string('lecturaActual');
            $table->float('totalPagar', 8, 2);
            $table->string('energiaMes');
            $table->dateTime('fechaEmision');
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
        Schema::dropIfExists('datosfacturas');
    }
}
