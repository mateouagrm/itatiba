<?php

use Illuminate\Database\Seeder;
use App\Factura;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*del 12 al 17 mano de obra*/
    public function run()
    {
        $factura1 = Factura::create([
            'fecha' => '10/05/2019',
            'costo_total' => 5,
            'id_proveedor' => 1
        ]);

        $factura1->items()->sync([1,2,3,4,5,6,7,8,9,10,11]);
        $this->actualizarCosto($factura1->id);

        $factura2 = Factura::create([
            'fecha' => '10/05/2019',
            'costo_total' => 5,
            'id_proveedor' => 2
        ]);

        $factura2->items()->sync([17,18,19]);
        $this->actualizarCosto($factura2->id);
    }


    public function actualizarCosto($id){
        $factura = Factura::find($id);
        $cantidad = 0;
        foreach ($factura->items as $item){
            $cantidad+= $item->costo;
        }
        $factura->costo_total = $cantidad;
        $factura->update();
    }
}
