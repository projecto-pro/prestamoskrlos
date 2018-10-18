<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('cantidad_cuota');
            $table->string('descripcion', 500);
            $table->decimal('interes', 5, 2);
            $table->decimal('monto_total', 11, 2);
            $table->decimal('cuota', 11, 2)->default(0.00);
            $table->date('fecha')->nullable();
            $table->boolean('estado')->default(1);   

            $table->unsignedInteger('fkcliente');
            $table->unsignedInteger('fkdia');
            $table->unsignedInteger('fkuser');
            $table->unsignedInteger('fktipo_prestamo')->default(1);
            $table->unsignedInteger('fkruta');
            $table->foreign('fkcliente')->references('id')->on('cliente')->onUpdate('cascade');  
            $table->foreign('fkdia')->references('id')->on('dia_pago')->onUpdate('cascade');            
            $table->foreign('fkuser')->references('id')->on('users')->onUpdate('cascade');  
            $table->foreign('fktipo_prestamo')->references('id')->on('tipo_prestamo')->onUpdate('cascade');
            $table->foreign('fkruta')->references('id')->on('ruta')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestamo');
    }
}
