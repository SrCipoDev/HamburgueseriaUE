<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //FUNCION PARA MOSTRAR LAS CATEGORIAS Y LOS PRODUCTOS
    public function index()
    {
        // Cargar productos con cada categoría utilizando with('productos')
        $categorias = Categoria::with('productos')->get();
        // Pasar las categorías a la vista
        return view('carta.carta', compact('categorias'));
    }
}
