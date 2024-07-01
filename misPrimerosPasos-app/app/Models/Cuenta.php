<?php
// app/Models/Cuenta.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cuenta extends Authenticatable
{
    use Notifiable;

    protected $table = 'cuentas';

    protected $fillable = [
        'id_persona',
        'email',
        'password',
        'rol_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}
