<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificaciones';
    protected $primaryKey = 'idnotificaciones';
    protected $fillable = ['tipo','usuario','fecha','categoria','descripcion','estado'];
    public $timestamps = false;
}
