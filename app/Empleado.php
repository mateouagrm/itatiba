<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
        'nombre', 'apellido' , 'carnet','cargo','salario'
    ];
}
