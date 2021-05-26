<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{

    protected $fillable = ['id', 'tipoCliente','tarifa','consumo','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
