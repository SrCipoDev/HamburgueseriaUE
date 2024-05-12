<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    /*//FUNCION PARA MOSTRAR LAS CATEGORIAS Y LOS PRODUCTOS
    public function index()
    {
        // Cargar productos con cada categoría utilizando with('productos')
        $categorias = Categoria::with('productos')->get();
        // Pasar las categorías a la vista
        return view('carta.carta', compact('categorias'));
    }*/


    public function index(Request $request)
    {
        // Obtener las categorías que se mostrarán en la carta
        $categorias = Categoria::with('productos')->get();;

        // Establecer la variable $categoriaSeleccionada en null por defecto
        $categoriaSeleccionada = null;

        // Verificar si se ha enviado una categoría específica en la solicitud
        if ($request->has('categoria')) {
            // Si se ha enviado una categoría, establecer la variable $categoriaSeleccionada en el valor de la categoría seleccionada
            $categoriaSeleccionada = $request->categoria;
        }

        // Pasar las categorías y la categoría seleccionada a la vista
        return view('carta.carta', compact('categorias', 'categoriaSeleccionada'));
    }
}
