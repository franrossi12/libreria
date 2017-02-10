<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = [
        'id',
        'id_cliente',
        'id_libro',
        'monto',
    ];
}