<?php

use Illuminate\Database\Seeder;
use App\Obra;

class ObraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $obra1 = Obra::create([
            'nombre' => 'CONSTRUCCION DE PAREDES HUECOS DE ARCILLA',
            'descripcion' => 'su descripcion'
        ]);

        $obra2 = Obra::create([
            'nombre' => 'CONSTRUCCION DE REVESTIMIENTOS INTERIORES DE PAREDES',
            'descripcion' => 'su descripcion'
        ]);

        $obra3 = Obra::create([
            'nombre' => 'ALCANTARIILADOS',
            'descripcion' => 'su descripcion'
        ]);

        $obra4 = Obra::create([
            'nombre' => 'ASFALTADO',
            'descripcion' => 'su descripcion'
        ]);
        $obra5 = Obra::create([
            'nombre' => 'OBRAS DE HOSPITALES',
            'descripcion' => 'su descripcion'
        ]);

        $obra6 = Obra::create([
            'nombre' => 'EXCAVACIONES',
            'descripcion' => 'su descripcion'
        ]);

        $obra7 = Obra::create([
            'nombre' => 'INSTALACIONES ELECTRICAS',
            'descripcion' => 'su descripcion'
        ]);

        $obra8 = Obra::create([
            'nombre' => 'OBRAS DE CONCRETO',
            'descripcion' => 'su descripcion'
        ]);

        $obra9 = Obra::create([
            'nombre' => 'OBRAS DE SERVICIO',
            'descripcion' => 'su descripcion'
        ]);
    }
}
