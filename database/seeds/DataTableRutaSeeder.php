<?php

use Illuminate\Database\Seeder;

class DataTableRutaSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\Ruta();
        $insert->nombre = 'Guatemala';  
        $insert->save();

        $insert = new App\Ruta();
        $insert->nombre = 'Palin';  
        $insert->save();

        $insert = new App\Ruta();
        $insert->nombre = 'Escuintla';  
        $insert->save();                      
    }
}
