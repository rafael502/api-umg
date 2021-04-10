<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datosfactura extends Model
{
    protected $fillable = ['idFactura', 'DireccionDomiciliar','Precio','LecturaAnterir','LecturaActual','Consumo','TotalPagar','EnergiaMes','DPI','idDepEmpleado','idTipoCliente','idMedidor'];
    protected $primaryKey = 'idFactura';
    public $timestamps = false;
}
