<?php

use Illuminate\Database\Seeder;

class DataTableConfigSistemaSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\ConfigSistema();
        $insert->nombre = 'Prueba';
        $insert->telefono = '78850935';
		$insert->cod_mercantil = '330608';
		$insert->email = 'prueba@sistema.com';
		$insert->save();
    }
}
