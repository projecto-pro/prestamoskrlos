<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigSistemaTable extends Migration
{
    public function up()
    {
        Schema::create('config_sistema', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('logotipo')->nullable();
            $table->string('nombre', 50);
            $table->string('telefono', 8);
            $table->string('cod_mercantil', 8);
            $table->string('email', 100)->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('config_sistema');
    }
}
