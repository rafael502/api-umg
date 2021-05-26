<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentoempleado extends Model
{
    protected $fillable = ['id', 'departamento','descripcion'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
