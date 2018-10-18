<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenciaTable extends Migration
{
    public function up()
    {
        Schema::create('referencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('telefono', 8);
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('fktipo_referencia');
            $table->unsignedInteger('fkcliente');
            $table->foreign('fktipo_referencia')->references('id')->on('tipo_referencia')->onUpdate('cascade');            
            $table->foreign('fkcliente')->references('id')->on('cliente')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referencia');
    }
}
