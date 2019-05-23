<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor1 = Proveedor::create([
            'nombre' => 'proveedor juan',
            'apellido' => 'tomaz',
            'carnet' => '9753152',
            'nit' => '78119218'
        ]);

        $proveedor2 = Proveedor::create([
            'nombre' => 'proveedor enrique',
            'apellido' => 'salasar',
            'carnet' => '9658126',
            'nit' => '6518162'
        ]);
    }
}
