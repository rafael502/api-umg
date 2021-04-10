<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['DPI', 'PrimerNombre','SegundoNombre','PrimerApellido','SegundoApellido','Num_Telefono','idTipoCliente','idDireDomi','idCorreo','estado'];
    protected $primaryKey = 'DPI';
    public $timestamps = false;

}
