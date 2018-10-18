<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutaClienteTable extends Migration
{
    public function up()
    {
        Schema::create('ruta_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('fkruta');
            $table->unsignedInteger('fkcliente');
            $table->foreign('fkruta')->references('id')->on('ruta')->onUpdate('cascade');            
            $table->foreign('fkcliente')->references('id')->on('cliente')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ruta_cliente');
    }
}
