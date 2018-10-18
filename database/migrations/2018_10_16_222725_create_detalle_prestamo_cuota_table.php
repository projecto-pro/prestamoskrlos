<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePrestamoCuotaTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_prestamo_cuota', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('correlativo');
            $table->decimal('debe', 11, 2);
            $table->date('fecha');
            $table->boolean('pago')->default(0);

            $table->unsignedInteger('fkprestamo');
            $table->foreign('fkprestamo')->references('id')->on('prestamo')->onUpdate('cascade');    

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalle_prestamo_cuota');
    }
}
