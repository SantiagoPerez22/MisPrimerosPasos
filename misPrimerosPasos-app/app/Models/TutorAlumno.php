<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorAlumno extends Model
{
    use HasFactory;

    protected $table = 'tutor_alumno';

    protected $fillable = [
        'id_alumno',
        'id_tutor1',
        'id_tutor2',
        'id_nivel',
        'fecha_matricula'
    ];
}
