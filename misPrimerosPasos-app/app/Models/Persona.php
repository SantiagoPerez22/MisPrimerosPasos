<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'edad',
        'rut',
        'telefono',
        'email'
    ];

    public function tutorAlumnos()
    {
        return $this->hasMany(TutorAlumno::class, 'id_alumno');
    }

    public function alergias()
    {
        return $this->hasManyThrough(Alergia::class, TutorAlumno::class, 'id_alumno', 'id_alumno', 'id', 'id');
    }

    public function enfermedades()
    {
        return $this->hasManyThrough(Alergia::class, TutorAlumno::class, 'id_alumno', 'id_alumno', 'id', 'id');
    }
}
