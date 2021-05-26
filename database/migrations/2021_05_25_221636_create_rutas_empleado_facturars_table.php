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
            $table->integer('idEmpleado');
            $table->integer('idDatosFactura');
            $table->datetime('fechaFacturar');
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
