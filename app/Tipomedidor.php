<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomedidor extends Model
{
    protected $fillable = ['id', 'tipoMedidor','descripcion'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
