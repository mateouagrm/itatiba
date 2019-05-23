<?php

use Illuminate\Database\Seeder;
use App\Empleado;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        protected $fillable =[
//        'nombre', 'apellido' , 'carnet','cargo','salario'
//    ];

        $empleado1 = Empleado::create([
            'nombre' => 'juana ana',
            'apellido' => 'azurdui',
            'carnet' => '9796432',
            'cargo' => 'arquitecta',
            'salario' => 2100
        ]);

        $empleado2 = Empleado::create([
            'nombre' => 'mariana ana',
            'apellido' => 'lopez',
            'carnet' => '2136452',
            'cargo' => 'arquitectca',
            'salario' => 2100
        ]);

        $empleado3 = Empleado::create([
            'nombre' => 'juan perez',
            'apellido' => 'perez',
            'carnet' => '65656542',
            'cargo' => 'ingeniero',
            'salario' => 2100
        ]);

        $empleado4 = Empleado::create([
            'nombre' => 'mario',
            'apellido' => 'kemp',
            'carnet' => '2354168',
            'cargo' => 'obrero',
            'salario' => 2100
        ]);

        $empleado5 = Empleado::create([
            'nombre' => 'elhan juan',
            'apellido' => 'martinez',
            'carnet' => '6525423',
            'cargo' => 'obrero',
            'salario' => 2100
        ]);

        $empleado6 = Empleado::create([
            'nombre' => 'rodrigo luis',
            'apellido' => 'quiroz',
            'carnet' => '45261386',
            'cargo' => 'obrero',
            'salario' => 2100
        ]);
        $empleado7 = Empleado::create([
            'nombre' => 'leonar',
            'apellido' => 'pucapare',
            'carnet' => '2335168',
            'cargo' => 'obrero',
            'salario' => 2100
        ]);
        $empleado8 = Empleado::create([
            'nombre' => 'sherlon',
            'apellido' => 'gonzales',
            'carnet' => '8572562',
            'cargo' => 'obrero',
            'salario' => 2100
        ]);

    }
}
