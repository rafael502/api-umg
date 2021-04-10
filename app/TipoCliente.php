<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{

    protected $fillable = ['idTipoCliente', 'TipoCliente','Tarifa'];
    protected $primaryKey = 'idTipoCliente';
    public $timestamps = false;
}
