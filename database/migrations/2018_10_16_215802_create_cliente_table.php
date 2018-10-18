<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cui', 15);
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('telefono', 8)->nullable();
            $table->string('celular', 8)->nullable();
            $table->string('direccion_trabajo', 250)->nullable();
            $table->string('direccion', 250);
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('fksexo');
            $table->foreign('fksexo')->references('id')->on('sexo')->onUpdate('cascade');             

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
