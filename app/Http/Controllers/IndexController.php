<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class IndexController extends Controller
{
    public function __invoke(Request $request)
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
        return view('index', compact('categorias', 'categoriaSeleccionada'));
    }
}
