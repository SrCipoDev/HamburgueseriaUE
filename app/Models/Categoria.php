<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id_categoria'; // añadido para facilitar las rutas

    // Para que ambas variables mantengan una relacion
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
}
