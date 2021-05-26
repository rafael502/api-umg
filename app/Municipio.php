<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['id','idDepartamento','municipio'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
