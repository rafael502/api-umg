<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['id','dpi', 'nombre','apellido','nit','direccionDomiciliar','idDepartamento','idMunicipio','email','telefono','idTipoCliente','estado','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
