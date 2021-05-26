<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['id','dpi', 'nombre','apellido','idDepartamentoEmpleado','telefono','email','direccionDomiciliar','idDepartamento','idMunicipio','estado','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
