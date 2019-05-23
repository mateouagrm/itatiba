<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        protected $fillable =[
//        'nombre', 'cantidad' , 'costo','tipo'
//    ];

        $item1 = Item::create([
            'nombre' => 'ABERTURA VANO PUERTA-VENTANA',
            'cantidad' => 10,
            'costo' => 150,
            'tipo' => 'materiales'
        ]);

        $item2 = Item::create([
            'nombre' => 'ACARREO MATERIALES PETREOS-TIERRA-VARIOS (DISTANCIA DE 1 A 5 KM)',
            'cantidad' => 10,
            'costo' => 125,
            'tipo' => 'materiales'
        ]);

        $item3 = Item::create([
            'nombre' => 'CERRAMIENTO EN TABLA BURRA H=3.00 mts',
            'cantidad' => 10,
            'costo' => 150,
            'tipo' => 'materiales'
        ]);

        $item4 = Item::create([
            'nombre' => 'CONFIGURACIÓN-NIVELACIÓN TERRENO',
            'cantidad' => 10,
            'costo' => 140,
            'tipo' => 'materiales'
        ]);

        $item5 = Item::create([
            'nombre' => 'DEMOLICIÓN CONCRETO CICLOPEO (INCLUYE RETIRO)',
            'cantidad' => 10,
            'costo' => 205,
            'tipo' => 'materiales'
        ]);

        $item6 = Item::create([
            'nombre' => 'DEMOLICIÓN CAJA INSPECCION (INCLUYE RETIRO)',
            'cantidad' => 10,
            'costo' => 302,
            'tipo' => 'materiales'
        ]);
        $item7 = Item::create([
            'nombre' => 'DEMOLICIÓN VIGA CANAL (INCLUYE RETIRO)',
            'cantidad' => 10,
            'costo' => 422,
            'tipo' => 'materiales'
        ]);

        $item8 = Item::create([
            'nombre' => 'DESMONTE CORREA METALICA (INCLUYE RETIRO)',
            'cantidad' => 10,
            'costo' => 100,
            'tipo' => 'materiales'
        ]);

        $item9 = Item::create([
            'nombre' => 'DESMONTE VIDRIO (INCLUYE RETIRO)',
            'cantidad' => 10,
            'costo' => 500,
            'tipo' => 'materiales'
        ]);

        $item10 = Item::create([
            'nombre' => 'RED ELÉCTRICA PROVISIONAL L/50 M',
            'cantidad' => 10,
            'costo' => 200,
            'tipo' => 'materiales'
        ]);

        $item11 = Item::create([
            'nombre' => 'RETIRO TUBERIA EXISTENTE',
            'cantidad' => 10,
            'costo' => 600,
            'tipo' => 'materiales'
        ]);

        /*mano de obra*/
        $item12 = Item::create([
            'nombre' => 'Maestro pinto',
            'cantidad' => 3,
            'costo' => 800,
            'tipo' => 'manodeobra'
        ]);

        $item13 = Item::create([
            'nombre' => 'Maestro albañil',
            'cantidad' => 5,
            'costo' => 900,
            'tipo' => 'manodeobra'
        ]);

        $item14 = Item::create([
            'nombre' => 'Ayudante',
            'cantidad' => 20,
            'costo' => 4000,
            'tipo' => 'manodeobra'
        ]);

        $item15 = Item::create([
            'nombre' => 'Eléctrico',
            'cantidad' => 10,
            'costo' => 3000,
            'tipo' => 'manodeobra'
        ]);

        $item16 = Item::create([
            'nombre' => 'Plomero',
            'cantidad' => 6,
            'costo' => 2000,
            'tipo' => 'manodeobra'
        ]);

        $item17 = Item::create([
            'nombre' => 'soldador',
            'cantidad' => 3,
            'costo' => 1500,
            'tipo' => 'manodeobra'
        ]);

        /*maquinaria*/


        $item18 = Item::create([
            'nombre' => 'escabadora',
            'cantidad' => 3,
            'costo' => 3000,
            'tipo' => 'maquinaria'
        ]);

        $item19 = Item::create([
            'nombre' => 'demodeladora',
            'cantidad' => 3,
            'costo' => 3000,
            'tipo' => 'maquinaria'
        ]);

        $item20 = Item::create([
            'nombre' => 'soldadora',
            'cantidad' => 3,
            'costo' => 4000,
            'tipo' => 'maquinaria'
        ]);

    }
}
