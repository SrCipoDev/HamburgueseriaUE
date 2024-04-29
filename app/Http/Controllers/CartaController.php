<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    public function index()
    {
        // Obtener las categorías desde la base de datos
        $categorias = Categoria::all();

        // Pasar las categorías a la vista
        return view('carta.carta', compact('categorias'));
    }
}
