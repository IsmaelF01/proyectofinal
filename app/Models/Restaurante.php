<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'direccion', 'ciudad', 'telefono', 'latitud', 'longitud'
    ];

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }
}
