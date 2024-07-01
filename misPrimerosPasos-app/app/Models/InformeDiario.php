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
        'fecha'
    ];
}
