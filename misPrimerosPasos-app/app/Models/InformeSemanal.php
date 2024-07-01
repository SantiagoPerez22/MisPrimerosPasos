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
        'altura',
        'peso',
        'fecha'
    ];
}
