<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // 🔥 Indicar la tabla exacta
    protected $table = 'personas';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
    ];
}