<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasEmpleadoFacturarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas_empleado_facturars', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idEmpleado');
            $table->unsignedBigInteger('idDatosFactura');
            $table->datetime('fechaFacturar');
            $table->foreign('idEmpleado')->references('id')->on('empleados');
            $table->foreign('idDatosFactura')->references('id')->on('datosfacturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas_empleado_facturars');
    }
}
