<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutasContador extends Model
{
    protected $fillable = ['id','descripcion','idMedidor','estado','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
