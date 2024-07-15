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
        'id_cuenta',
        'asistencia',
        'fecha'
    ];

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'id_clase');
    }

    public function alumno()
    {
        return $this->belongsTo(TutorAlumno::class, 'id_alumno');
    }

    public function cuenta()
    {
        return $this->belongsTo(User::class, 'id_cuenta');
    }
}
