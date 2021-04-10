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
            $table->id('idFactura');
            $table->string('DireccionDomiciliar');
            $table->string('Tarifa');
            $table->double('Precio');
            $table->double('LecturaAnterir');
            $table->double('LecturaActual');
            $table->double('Consumo');
            $table->double('TotalPagar');
            $table->string('EnergiaMes');

            $table->integer('DPI');
            $table->integer('idDepEmpleado');
            $table->integer('idTipoCliente');
            $table->integer('idMedidor');

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
