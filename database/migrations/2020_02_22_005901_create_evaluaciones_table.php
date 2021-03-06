<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
          $table->increments('Codigo');
          $table->unsignedInteger('CodigoComision');
          $table->integer('RUTAcademico');
          $table->string('Argumento',100)->nullable();
          $table->float('n1',2,1)->nullable();
          $table->float('n2',2,1)->nullable();
          $table->float('n3',2,1)->nullable();
          $table->float('n4',2,1)->nullable();
          $table->float('n5',2,1)->nullable();
          $table->float('p1',2,1)->nullable();
          $table->float('p2',2,1)->nullable();
          $table->float('p3',2,1)->nullable();
          $table->float('p4',2,1)->nullable();
          $table->float('p5',2,1)->nullable();
          $table->float('NotaFinal',3,2);
          $table->foreign('CodigoComision')
                ->references('Codigo')
                ->on('comisiones');
          $table->foreign('RUTAcademico')
                ->references('RUT')
                ->on('academicos');
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
        Schema::dropIfExists('evaluaciones');
    }
}
