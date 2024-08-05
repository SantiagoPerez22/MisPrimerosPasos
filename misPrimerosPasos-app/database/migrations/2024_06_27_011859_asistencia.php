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
            $table->unsignedBigInteger('id_cuenta'); // Nuevo campo
            $table->enum('asistencia', ['Sí', 'No']);
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
            $table->foreign('id_clase')->references('id')->on('clase');
            $table->foreign('id_cuenta')->references('id')->on('users'); // Clave foránea
        });
    }

    public function down()
    {
        Schema::dropIfExists('asistencia');
    }
}
