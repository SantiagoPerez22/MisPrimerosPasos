<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformeDiario extends Model
{
    use HasFactory;

    protected $table = 'informe_diario';

    protected $fillable = [
        'id_condicion',
        'id_alumno',
        'observaciones',
        'fecha',
        'id_cuenta',
        'imagen',
    ];

    public function condicion()
    {
        return $this->belongsTo(Condicion::class, 'id_condicion');
    }

    public function alumno()
    {
        return $this->belongsTo(TutorAlumno::class, 'id_alumno');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_cuenta');
    }
}
