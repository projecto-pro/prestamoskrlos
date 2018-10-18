<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaPagoTable extends Migration
{
    public function up()
    {
        Schema::create('dia_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 20)->unique();          
            $table->boolean('estado')->default(1);            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dia_pago');
    }
}
