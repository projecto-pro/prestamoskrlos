<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPrestamoTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_prestamo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 20)->unique();      
            $table->string('descripcion', 250)->nullable();      
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_prestamo');
    }
}
