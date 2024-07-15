<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformeSemanal extends Model
{
    use HasFactory;

    protected $table = 'informe_semanal';

    protected $fillable = [
        'id_alumno',
        'id_cuenta',
        'altura',
        'peso',
        'fecha'
    ];

    public function alumno()
    {
        return $this->belongsTo(TutorAlumno::class, 'id_alumno');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_cuenta');
    }
}
