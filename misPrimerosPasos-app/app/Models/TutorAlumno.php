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

    public function alumno()
    {
        return $this->belongsTo(Persona::class, 'id_alumno');
    }

    public function tutor1()
    {
        return $this->belongsTo(Persona::class, 'id_tutor1');
    }

    public function tutor2()
    {
        return $this->belongsTo(Persona::class, 'id_tutor2');
    }

    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'id_nivel');
    }
}
