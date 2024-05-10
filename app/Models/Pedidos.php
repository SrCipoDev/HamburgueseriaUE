<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $primaryKey = 'id_pedido';
    //use HasFactory;

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
}
