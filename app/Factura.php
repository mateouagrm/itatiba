<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{

    protected $table='factura';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
        'fecha', 'costo_total' , 'id_proveedor'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class,'factura_item','id_factura','id_item');
    }
}

