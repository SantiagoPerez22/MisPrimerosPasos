<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Observaciones extends Migration
{
    public function up()
    {
        Schema::create('observaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_clase');
            $table->text('observaciones');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
            $table->foreign('id_clase')->references('id')->on('clase');
        });
    }

    public function down()
    {
        Schema::dropIfExists('observaciones');
    }
}