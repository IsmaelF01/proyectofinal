<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'restaurante_id', 'platos_id', 'repartidor_id', 'estado'
    ];

    public function platos(){
        return $this->belongsToMany(Plato::class ,'lineas_pedidos', 'plato_id', 'pedido_id')->withPivot('cantidad');
    }

    public function cliente(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }
}
