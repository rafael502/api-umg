<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionDomiciliar extends Model
{
    protected $fillable = ['idDireccionDomiciliar', 'Pais','Zona','Avenida','Calle','idDepartamento','idMunicipio'];
    protected $primaryKey = 'idDireccionDomiciliar';
    public $timestamps = false;
}
