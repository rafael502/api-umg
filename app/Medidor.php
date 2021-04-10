<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{
    protected $fillable = ['idMedidor', 'Marca','Modelo','idTipoMedidor'];
    protected $primaryKey = 'idMedidor';
    public $timestamps = false;
}
