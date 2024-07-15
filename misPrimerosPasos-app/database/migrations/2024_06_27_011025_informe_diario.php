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
            $table->longText('observaciones'); // Usamos longText para textos largos
            $table->date('fecha');
            $table->unsignedBigInteger('id_cuenta');
            $table->string('imagen')->nullable();
            $table->timestamps(); // Agregar estas líneas para incluir created_at y updated_at

            $table->foreign('id_condicion')->references('id')->on('condicion');
            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
            $table->foreign('id_cuenta')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('informe_diario');
    }
}
