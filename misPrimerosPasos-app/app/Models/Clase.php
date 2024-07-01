<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    protected $table = 'clase';

    protected $fillable = [
        'id_ambito',
        'id_nucleo',
        'id_nivel',
        'id_profesor',
        'id_asistente1',
        'id_asistente2',
        'id_sala',
        'objetivo',
        'observaciones',
        'fecha'
    ];
}
