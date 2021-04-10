<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomedidor extends Model
{
    protected $fillable = ['idTipoMedidor', 'TipoMedidor','Descripcion'];
    protected $primaryKey = 'idTipoMedidor';
    public $timestamps = false;

}
