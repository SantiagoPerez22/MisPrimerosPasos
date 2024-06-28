<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alergia extends Migration
{
    public function up()
    {
        Schema::create('alergia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_alumno');
            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alergia');
    }
}