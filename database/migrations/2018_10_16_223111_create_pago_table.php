<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTable extends Migration
{
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha')->default(date('Y-m-d'));
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('fkdetalle_prestamo_cuota');
            $table->unsignedInteger('fkuser');
            $table->foreign('fkdetalle_prestamo_cuota')->references('id')->on('detalle_prestamo_cuota')->onUpdate('cascade');
            $table->foreign('fkuser')->references('id')->on('users')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pago');
    }
}
