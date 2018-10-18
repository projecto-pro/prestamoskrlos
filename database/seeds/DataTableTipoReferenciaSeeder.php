<?php

use Illuminate\Database\Seeder;

class DataTableTipoReferenciaSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\TipoReferencia();
        $insert->nombre = 'Personal';  
        $insert->save();

        $insert = new App\TipoReferencia();
        $insert->nombre = 'Laboral';  
        $insert->save();        
    }
}
