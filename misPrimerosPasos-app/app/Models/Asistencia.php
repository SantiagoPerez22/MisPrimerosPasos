<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $table = 'asistencia';

    protected $fillable = [
        'id_alumno',
        'id_clase',
        'asistencia',
        'fecha'
    ];
}
