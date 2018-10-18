<?php

use Illuminate\Database\Seeder;

class DataTableTipoAbonoSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\TipoAbono();
        $insert->nombre = 'Capital';  
        $insert->save();

        $insert = new App\TipoAbono();
        $insert->nombre = 'Interés';  
        $insert->save();        
    }
}
