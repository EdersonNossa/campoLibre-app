<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'evento';
    protected $primaryKey = 'idevento';
    protected $fillable = ['nomevento','fecevento','lugevento','horevento','descevento','esteevento'];
    public $timestamps = false;
}
