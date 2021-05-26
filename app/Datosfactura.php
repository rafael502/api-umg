<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datosfactura extends Model
{
    protected $fillable = ['id', 'idEmpleado','idClienteMedidor','tarifa','precio','concepto','lecturaAnterior','lecturaActual','totalPagar','energiaMes','fechaEmision','idMedidor'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
