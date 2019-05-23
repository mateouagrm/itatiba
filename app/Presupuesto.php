<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table='presupuesto';
    protected $primarykey='id';

    public $timestamps=false;

    protected $fillable =[
        'fecha','fase_obra','estado','costo_material','costo_personal','ganancia','id_obra','id_cliente'
    ];


    public function items()
    {
        return $this->belongsToMany(Item::class,'propuesta_item','id_presupuesto','id_item');
    }

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class,'presupuesto_empleado','id_presupuesto','id_empleado');
    }
}
