<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginUsuario extends Model
{
    protected $fillable = ['id', 'usuario','password','perfil','idEmpleado','estado','ultimoLogin','fecha'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
