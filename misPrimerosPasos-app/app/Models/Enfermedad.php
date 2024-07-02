<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;

    protected $table = 'enfermedades';

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_alumno'
    ];

    public function alumno()
    {
        return $this->belongsTo(TutorAlumno::class, 'id_alumno');
    }
}
