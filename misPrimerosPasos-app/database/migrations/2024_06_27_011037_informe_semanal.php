<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformeSemanal extends Migration
{
    public function up()
    {
        Schema::create('informe_semanal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_cuenta'); // Nuevo campo
            $table->decimal('altura', 5, 2);
            $table->decimal('peso', 5, 2);
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('tutor_alumno');
            $table->foreign('id_cuenta')->references('id')->on('users'); // Clave foránea
        });
    }

    public function down()
    {
        Schema::dropIfExists('informe_semanal');
    }
}
