<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteMedidor extends Model
{
    protected $fillable = ['NIS', 'Marca','Modelo','idTipoMedidor'];
    protected $primaryKey = 'idMedidor';
    public $timestamps = false;
}
