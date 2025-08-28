<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['persona_id', 'producto_id', 'cantidad', 'venta'];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}