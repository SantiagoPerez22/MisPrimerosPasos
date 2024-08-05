<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'fecha_nacimiento',
        'rut',
        'telefono',
        'email',
        'domicilio_id'
    ];

    public function domicilio()
    {
        return $this->belongsTo(Domicilio::class, 'domicilio_id');
    }

    public function getEdadAttribute()
    {
        $fechaNacimiento = Carbon::parse($this->fecha_nacimiento);
        $now = Carbon::now();

        $years = $fechaNacimiento->diffInYears($now);
        $months = $fechaNacimiento->diffInMonths($now) % 12;
        $days = $fechaNacimiento->diffInDays($now) % 30;

        if ($years >= 4) {
            return "{$years} años";
        } elseif ($years > 0) {
            return "{$years} años y {$months} meses";
        } elseif ($months > 0) {
            return "{$months} meses y {$days} días";
        } else {
            return "{$days} días";
        }
    }

    public function getDiasDesdeNacimientoAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->diffInDays(Carbon::now());
    }

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre1} {$this->nombre2} {$this->apellido1} {$this->apellido2}";
    }

    public function tutorAlumno()
    {
        return $this->hasMany(TutorAlumno::class, 'id_alumno');
    }
}
