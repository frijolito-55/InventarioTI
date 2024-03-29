<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Responsable extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'responsable'; // Nombre de la tabla

    protected $primaryKey = 'id_responsable'; // Nombre de la clave primaria

    protected $fillable = [
        'usuario',
        'nombre',
        'password',
        'tipo',
        'departamento',
        'acceso',
    ];

    // No ocultar la contraseña
    protected $hidden = [];

    // No establecer campos de fecha predeterminados
    public $timestamps = false;
    public function getPlainTextPassword()
    {
        return $this->password;
    }


}
