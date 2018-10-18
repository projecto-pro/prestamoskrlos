<?php

use Illuminate\Database\Seeder;

class DataTableDiaPagoSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\DiaPago();
        $insert->nombre = 'Ninguno';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Domingo';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Lunes';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Martes';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Miércoles';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Jueves';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Viernes';  
        $insert->save();  

        $insert = new App\DiaPago();
        $insert->nombre = 'Sábado';  
        $insert->save();                                             
    }
}
