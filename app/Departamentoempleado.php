<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentoempleado extends Model
{
    protected $fillable = ['idDepEmpleado', 'DepEmpleado','Descripcion'];
    protected $primaryKey = 'idDepEmpleado';
    public $timestamps = false;

}
