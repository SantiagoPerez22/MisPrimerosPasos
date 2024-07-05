<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cuentas extends Migration
{
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->string('email', 100);
            $table->string('password', 255);
            $table->unsignedBigInteger('rol_id');
            $table->timestamps();
        
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('email')->references('email')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });        
    }

    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}