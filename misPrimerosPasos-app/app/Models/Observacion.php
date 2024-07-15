<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    use HasFactory;

    protected $table = 'observaciones';

    protected $fillable = [
        'id_alumno',
        'id_clase',
        'id_cuenta',
        'observaciones',
        'fecha'
    ];

    public function alumno()
    {
        return $this->belongsTo(TutorAlumno::class, 'id_alumno');
    }

    public function clase()
    {
        return $this->belongsTo(Clase::class, 'id_clase');
    }

    public function cuenta()
    {
        return $this->belongsTo(User::class, 'id_cuenta');
    }
}
