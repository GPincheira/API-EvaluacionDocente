<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
          $table->increments('Codigo');
          $table->string('Nombre')->unique();
          $table->string('Estado');
          $table->unsignedInteger('CodigoFacultad');
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
        Schema::dropIfExists('departamentos');
    }
}
