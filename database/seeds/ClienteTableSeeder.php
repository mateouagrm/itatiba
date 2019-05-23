<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente1 = Cliente::create([
            'nombre' => 'juaquin chumacero',
            'telefono' => '70000000',
            'nit_carnet' => '33525495'
        ]);

        $cliente2 = Cliente::create([
            'nombre' => 'saturino juaquin',
            'telefono' => '70000011',
            'nit_carnet' => '33025255'
        ]);

        $cliente3 = Cliente::create([
            'nombre' => 'hermer galarga',
            'telefono' => '70021111',
            'nit_carnet' => '451251226'
        ]);

        $cliente4 = Cliente::create([
            'nombre' => 'juan tomas tomes',
            'telefono' => '60514505',
            'nit_carnet' => '326128312'
        ]);

        $cliente5 = Cliente::create([
            'nombre' => 'liliana lili lolina',
            'telefono' => '65252843',
            'nit_carnet' => '4256982'
        ]);

        $cliente6 = Cliente::create([
            'nombre' => 'antonia antoinio antonino',
            'telefono' => '74125840',
            'nit_carnet' => '46221975'
        ]);

    }
}
