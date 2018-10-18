<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonarTable extends Migration
{
    public function up()
    {
        Schema::create('abonar', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('monto', 11, 2);
            $table->date('fecha')->default(date('Y-m-d'));
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('fkdetalle_prestamo_libre');
            $table->unsignedInteger('fktipo_abono');
            $table->unsignedInteger('fkuser');
            $table->foreign('fkdetalle_prestamo_libre')->references('id')->on('detalle_prestamo_libre')->onUpdate('cascade'); 
            $table->foreign('fktipo_abono')->references('id')->on('tipo_abono')->onUpdate('cascade');          
            $table->foreign('fkuser')->references('id')->on('users')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abonar');
    }
}
