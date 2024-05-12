<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Pedidos;

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
    public function anadircarrito(Request $request, $id_producto)
    {
            $user_id = Auth::User()->id;
            $producto_id=$id_producto;
            $cantidad= $request->cantidad;
            $carrito=new Carrito();
            $carrito->user_id=$user_id;
            $carrito->id_producto=$producto_id;
            $carrito->cantidad=$cantidad;
            $carrito->save();
            
            
            return redirect()->back();
    }
    
    public function vercarrito(Request $request, $user_id) {
        $precioTotalCarrito = DB::table('carritos')
                                ->join('productos', 'carritos.id_producto', '=', 'productos.id_producto')
                                ->where('carritos.user_id', $user_id)
                                ->sum(DB::raw('productos.precio_producto * carritos.cantidad'));

        $carrito = Carrito::where('user_id', $user_id)->get();
        return view('vercarrito', ['carrito' => $carrito, 'precioTotalCarrito' => $precioTotalCarrito]);
    }
    
}
