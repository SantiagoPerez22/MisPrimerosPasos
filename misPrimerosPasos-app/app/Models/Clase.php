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

    public function ambito()
    {
        return $this->belongsTo(Ambito::class, 'id_ambito');
    }

    public function nucleo()
    {
        return $this->belongsTo(Nucleo::class, 'id_nucleo');
    }

    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'id_nivel');
    }

    public function profesor()
    {
        return $this->belongsTo(User::class, 'id_profesor');
    }

    public function asistente1()
    {
        return $this->belongsTo(User::class, 'id_asistente1');
    }

    public function asistente2()
    {
        return $this->belongsTo(User::class, 'id_asistente2');
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class, 'id_sala');
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'id_clase');
    }
}
