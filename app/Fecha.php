<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $fillable = ['idFechas', 'fechaCreacion','fechaModificacion','fechaSalida'];
    protected $primaryKey = 'idFechas';
}
