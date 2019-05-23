<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='proveedor';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
        'nombre','apellido','carnet','nit'
    ];
}
