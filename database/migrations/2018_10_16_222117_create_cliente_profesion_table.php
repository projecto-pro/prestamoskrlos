<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteProfesionTable extends Migration
{
    public function up()
    {
        Schema::create('cliente_profesion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('fkprofesion');
            $table->unsignedInteger('fkcliente');
            $table->foreign('fkprofesion')->references('id')->on('profesion')->onUpdate('cascade');            
            $table->foreign('fkcliente')->references('id')->on('cliente')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cliente_profesion');
    }
}
