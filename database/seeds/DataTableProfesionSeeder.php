<?php

use Illuminate\Database\Seeder;

class DataTableProfesionSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\Profesion();
        $insert->nombre = 'Bachillerato en Ciencias y Letras con Orientación en Computación';  
        $insert->save();
    }
}
