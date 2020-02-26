<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioSecFacultadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_sec_facultades', function (Blueprint $table) {
            $table->integer('RUT')->unique();
            $table->unsignedInteger('CodigoFacultad');
            $table->primary('RUT');
            $table->foreign('RUT')
                  ->references('RUT')
                  ->on('usuarios');
            $table->foreign('CodigoFacultad')
                  ->references('Codigo')
                  ->on('facultades');
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
        Schema::dropIfExists('usuario_sec_facultades');
    }
}
