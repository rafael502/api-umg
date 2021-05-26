<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutasEmpleadoFacturar extends Model
{
    protected $fillable = ['id','idEmpleado','idDatosFactura','fechaFacturar'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
