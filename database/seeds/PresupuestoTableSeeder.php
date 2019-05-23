<?php

use Illuminate\Database\Seeder;
use App\Presupuesto;

class PresupuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*del 12 al 17 mano de obra*/
    public function run()
    {
        $presupuesto1 = Presupuesto::create([
            'fecha' => '10/05/2019',
            'fase_obra' => "neutro",
            'estado' => "iniciado",
            'costo_material' => 2000,
            'costo_personal' => 500,
            'ganancia' => 3250,
            'id_obra' => 1,
            'id_cliente' => 2,
        ]);

        $presupuesto1->empleados()->sync([1,2,3]);
        $presupuesto1->items()->sync([1,2,3,19]);

        $this->actualizarCostoMaterial($presupuesto1->id);
        $this->actualizarCostoEmpleado($presupuesto1->id);
        $this->ganancia($presupuesto1->id);

        $presupuesto2 = Presupuesto::create([
            'fecha' => '11/05/2019',
            'fase_obra' => "neutro",
            'estado' => "iniciado",
            'costo_material' => 2000,
            'costo_personal' => 500,
            'ganancia' => 3250,
            'id_obra' => 2,
            'id_cliente' => 3,
        ]);

        $presupuesto2->empleados()->sync([1,2]);
        $presupuesto2->items()->sync([1,2,3,4,5,6,7,12,19]);

        $this->actualizarCostoMaterial($presupuesto2->id);
        $this->actualizarCostoEmpleado($presupuesto2->id);
        $this->ganancia($presupuesto2->id);

        $presupuesto3 = Presupuesto::create([
            'fecha' => '11/05/2019',
            'fase_obra' => "neutro",
            'estado' => "iniciado",
            'costo_material' => 2000,
            'costo_personal' => 500,
            'ganancia' => 3250,
            'id_obra' => 2,
            'id_cliente' => 3,
        ]);

        $presupuesto3->empleados()->sync([3,4]);
        $presupuesto3->items()->sync([4,5,6,7,12,13,14,19]);

        $this->actualizarCostoMaterial($presupuesto3->id);
        $this->actualizarCostoEmpleado($presupuesto3->id);
        $this->ganancia($presupuesto3->id);


    }

    public function actualizarCostoMaterial($id){
        $presupuesto = Presupuesto::find($id);
        $cantidad = 0;
        foreach ($presupuesto->items as $item){
            $cantidad+= $item->costo;
        }
        $presupuesto->costo_material = $cantidad;
        $presupuesto->update();
    }

    public function actualizarCostoEmpleado($id){
        $presupuesto = Presupuesto::find($id);
        $cantidad = 0;
        foreach ($presupuesto->empleados as $empleado){
            $cantidad+= $empleado->salario;
        }
        $presupuesto->costo_personal = $cantidad;
        $presupuesto->update();
    }

    public function ganancia($id){
        $presupuesto = Presupuesto::find($id);
        $costo = $presupuesto->costo_material + $presupuesto->costo_personal;
        $costo += 0.3* $costo;
        $presupuesto->ganancia = $costo;
        $presupuesto->update();
    }
}
