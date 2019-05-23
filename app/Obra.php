<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table='obra';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
        'nombre', 'descripcion'
    ];
}
