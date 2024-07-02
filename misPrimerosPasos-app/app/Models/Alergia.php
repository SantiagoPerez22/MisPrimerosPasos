<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;

    protected $table = 'alergia';

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_alumno'
    ];

    public function tutorAlumno()
    {
        return $this->belongsTo(TutorAlumno::class, 'id_alumno');
    }
}
