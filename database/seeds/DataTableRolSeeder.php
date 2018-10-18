<?php

use Illuminate\Database\Seeder;

class DataTableRolSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\Rol();
        $insert->nombre = 'Administrador';  
        $insert->save();

        $insert = new App\Rol();
        $insert->nombre = 'Secretaría';  
        $insert->save();

        $insert = new App\Rol();
        $insert->nombre = 'Cobrador';  
        $insert->save();                
    }
}
