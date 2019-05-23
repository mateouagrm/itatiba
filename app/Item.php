<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table='item';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
        'nombre', 'cantidad' , 'costo','tipo'
    ];
}
