<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(DataTableConfigSistemaSeeder::class);
        $this->call(DataTableDiaPagoSeeder::class);
        $this->call(DataTableProfesionSeeder::class);
        $this->call(DataTableRolSeeder::class);
        $this->call(DataTableRutaSeeder::class);
        $this->call(DataTableSexoSeeder::class);
        $this->call(DataTableTipoAbonoSeeder::class);
        $this->call(DataTableTipoPrestamoSeeder::class);
        $this->call(DataTableTipoReferenciaSeeder::class);
        $this->call(DataTableUserSeeder::class);        
    }
}
