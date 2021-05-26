<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{
    protected $fillable = ['id', 'medidor','marca','modelo','idTipoMedidor','descripcion','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
