<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    protected $fillable = [
        'nombre',
        'autor',
        'precio',
        'stock',

    ];

    public function scopeNombre($query,$name)
    {
        $query->where('nombre', $name);
    }
}
