<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteMedidor extends Model
{
    protected $fillable = ['id', 'nis','idCliente','idTipoCliente','idMedidor','idTipoMedidor','estado','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
