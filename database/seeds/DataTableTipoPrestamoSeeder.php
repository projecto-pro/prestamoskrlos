<?php

use Illuminate\Database\Seeder;

class DataTableTipoPrestamoSeeder extends Seeder
{
    public function run()
    {
        $insert = new App\TipoPrestamo();
        $insert->nombre = 'Semanal';  
        $insert->descripcion = 'Prestamo que se cobrará cada Semana en cuotas fijas.';
        $insert->save();

        $insert = new App\TipoPrestamo();
        $insert->nombre = 'Mensual';  
        $insert->descripcion = 'Prestamo que se cobrará cada Mes en cuotas fijas.';
        $insert->save();

        $insert = new App\TipoPrestamo();
        $insert->nombre = 'Indefinido';  
        $insert->descripcion = 'Prestamo en donde el cliente decide cuanto pagar, tomando en cuenta que cada mes se genera interés sobre el monto que aun debe y el interés es acumulativo.';
        $insert->save();                   
    }
}
