<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TutorAlumno extends Migration
{
    public function up()
    {
        Schema::create('tutor_alumno', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_tutor1');
            $table->unsignedBigInteger('id_tutor2')->nullable();
            $table->unsignedBigInteger('id_nivel');
            $table->date('fecha_matricula');
            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('personas');
            $table->foreign('id_tutor1')->references('id')->on('personas');
            $table->foreign('id_tutor2')->references('id')->on('personas');
            $table->foreign('id_nivel')->references('id')->on('nivel');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tutor_alumno');
    }
}