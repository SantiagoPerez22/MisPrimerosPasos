<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sala extends Migration
{
    public function up()
    {
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sala');
    }
}