<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clase extends Migration
{
    public function up()
    {
        Schema::create('clase', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ambito');
            $table->unsignedBigInteger('id_nucleo');
            $table->unsignedBigInteger('id_nivel');
            $table->unsignedBigInteger('id_profesor');
            $table->unsignedBigInteger('id_asistente1')->nullable();
            $table->unsignedBigInteger('id_asistente2')->nullable();
            $table->unsignedBigInteger('id_sala');
            $table->text('objetivo')->nullable();
            $table->text('observaciones')->nullable();
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_ambito')->references('id')->on('ambito');
            $table->foreign('id_nucleo')->references('id')->on('nucleo');
            $table->foreign('id_nivel')->references('id')->on('nivel');
            $table->foreign('id_profesor')->references('id')->on('users');
            $table->foreign('id_asistente1')->references('id')->on('users');
            $table->foreign('id_asistente2')->references('id')->on('users');
            $table->foreign('id_sala')->references('id')->on('sala');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clase');
    }
}
