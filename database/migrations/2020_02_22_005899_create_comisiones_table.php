<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones', function (Blueprint $table) {
          $table->increments('Codigo');
          $table->year('Año');
          $table->date('Fecha');
          $table->unsignedInteger('CodigoFacultad');
          $table->string('NombreDecano');
          $table->integer('RUTSecFacultad');
          $table->string('NombreSecFacultad');
          $table->string('Nombre1');
          $table->string('Nombre2');
          $table->foreign('CodigoFacultad')
                ->references('Codigo')
                ->on('facultades');
          $table->foreign('RUTSecFacultad')
                ->references('RUT')
                ->on('usuarios');
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
        Schema::dropIfExists('comisiones');
    }
}
