<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'foto', 'precio', 'categoria'
    ];

    public function pedidos(){
        return $this->belongsToMany(Pedido::class ,'lineas_pedidos', 'plato_id', 'pedido_id');
    }
}
