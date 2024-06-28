<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asistencia extends Migration
{
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_clase');
            $table->enum('asistencia', ['si', 'no']);
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
            $table->foreign('id_clase')->references('id')->on('clase');
        });
    }

    public function down()
    {
        Schema::dropIfExists('asistencia');
    }
}