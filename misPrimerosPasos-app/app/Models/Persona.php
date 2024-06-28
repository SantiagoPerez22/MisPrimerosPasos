<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'nombre1', 'nombre2', 'apellido1', 'apellido2', 'edad', 'rut', 'telefono', 'email'
    ];
}
