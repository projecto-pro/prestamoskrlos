<?php

use Illuminate\Database\Seeder;

class DataTableUserSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\User();
        $insert->cui = '000000000000';
        $insert->nombres = 'Carlos';
        $insert->apellidos = 'Díaz';
        $insert->telefono = '00000000';
        $insert->celular = '00000000';
        $insert->direccion_trabajo = 'ninguna';
        $insert->direccion = 'ninguna';
        $insert->usuario = 'kdiaz';
        $insert->email = 'kdiaz@gmail.com';
        $insert->password = encrypt('admin');
        $insert->fkrol = 1;
        $insert->fksexo = 1;
        $insert->save();
    }
}
