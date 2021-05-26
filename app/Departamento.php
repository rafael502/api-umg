<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['id', 'departamento'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
