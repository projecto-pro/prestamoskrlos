<?php

use Illuminate\Database\Seeder;

class DataTableSexoSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\Sexo();
        $insert->nombre = 'Hombre';  
        $insert->save();

        $insert = new App\Sexo();
        $insert->nombre = 'Mujer';  
        $insert->save();        
    }
}
