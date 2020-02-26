<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->integer('RUT')->unique();
          $table->char('verificador',1);
          $table->string('Email')->unique();
          $table->string('Nombre');
          $table->string('ApellidoPaterno');
          $table->string('ApellidoMaterno');
          $table->string('Contraseña');
          $table->string('Estado');
          $table->integer('TipoUsuario');
          $table->primary('RUT');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
