<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['DPI', 'PrimerNombre','SegundoNombre','PrimerApellido','SegundoApellido','Telefono','idDireDomi','idDepartamento','estado'];
    protected $primaryKey = 'DPI';
    public $timestamps = false;

}
