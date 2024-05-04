<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //FUNCION PARA MOSTRAR LAS CATEGORIAS Y LOS PRODUCTOS
    public function index()
    {
        $categorias = Categoria::with('productos')->get(); // Cargar productos con cada categoría
        return view('carta.carta', compact('categorias'));
    }
}
