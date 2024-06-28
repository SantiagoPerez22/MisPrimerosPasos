<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformeDiario extends Migration
{
    public function up()
    {
        Schema::create('informe_diario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_condicion');
            $table->unsignedBigInteger('id_alumno');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_condicion')->references('id')->on('condicion');
            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
        });
    }

    public function down()
    {
        Schema::dropIfExists('informe_diario');
    }
}