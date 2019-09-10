<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noControl');
            $table->string('maestro');
            $table->string('alumno');
            $table->string('icInicial1stTest');
            $table->string('icInicial2stTest');
            $table->string('icInicial3stTest');
            $table->string('icInicialPlataformaYtareas');
            $table->string('icInicialFinalScore');
            $table->string('icbSuperior1stTest');
            $table->string('icbSuperior2stTest');
            $table->string('icbSuperior3stTest');
            $table->string('icbSuperiorPlataformaYtareas');
            $table->string('icbSuperiorFinalScore');
            $table->string('icpIntermedio1stTest');
            $table->string('icpIntermedio2stTest');
            $table->string('icpIntermedio3stTest');
            $table->string('icpIntermedioPlataformaYtareas');
            $table->string('icpIntermedioFinalScore');
            $table->string('icIntermedio1stTest');
            $table->string('icIntermedio2stTest');
            $table->string('icIntermedio3stTest');
            $table->string('icIntermedioPlataformaYtareas');
            $table->string('icIntermedioFinalScore');
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
        Schema::dropIfExists('calificaciones');
    }
}
