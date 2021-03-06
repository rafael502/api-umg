<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_usuarios', function (Blueprint $table) {
            $table->id('id');
            $table->string('usuario');
            $table->string('password');
            $table->string('perfil');
            $table->unsignedBigInteger('idEmpleado');
            $table->integer('estado');
            $table->dateTime('ultimoLogin');
            $table->date('fecha');
            $table->foreign('idEmpleado')->references('id')->on('empleados');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login_usuarios');
    }
}
