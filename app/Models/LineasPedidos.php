<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineasPedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'plato_id', 'pedido_id', 'cantidad'
    ];
}
