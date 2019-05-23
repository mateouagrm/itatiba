<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClienteTableSeeder::class);
        $this->call(EmpleadoTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(ObraTableSeeder::class);
        $this->call(PresupuestoTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
    }



}
