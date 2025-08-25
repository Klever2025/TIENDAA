<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional, si no es el plural estándar)
    protected $table = 'usuarios';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
    ];

    // Si quisieras proteger campos (opcional)
    // protected $guarded = ['id'];
}
