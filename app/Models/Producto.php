<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // use HasFactory;
    protected $primaryKey = 'id_producto'; // añadido para facilitar las rutas

    //Para que ambas variables mantengan una relacion 
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}