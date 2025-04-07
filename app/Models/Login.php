<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario'; // o 'id_usuario' si así está en la DB
    public $timestamps = false;

    protected $fillable = [
        'nomusuario',
        'apeusuario',
        'corusuario',
        'passusuario',
        'rolusuario',
        'munusuario',
        'fnausuario',
        'tipodoc',
        'numdoc',
    ];

    protected $hidden = [
        'passusuario',
    ];

    public function getAuthIdentifierName()
    {
        return 'corusuario';
    }

    public function getAuthPassword()
    {
        return $this->passusuario;
    }
}
