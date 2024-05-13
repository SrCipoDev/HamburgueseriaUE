<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Producto;
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

    // FUNCION INDEX 
    public function index(Request $request)
    {
        $categorias = Categoria::with('productos')->get();     // Obtener las categorías que se mostrarán en la carta
        $categoriaSeleccionada = null;                         // Establecer la variable $categoriaSeleccionada en null por defecto

        if ($request->has('categoria')) {               // Verificar si se ha enviado una categoría específica en la solicitud
            // Si se ha enviado una categoría, establecer la variable $categoriaSeleccionada en el valor de la categoría seleccionada
            $categoriaSeleccionada = $request->categoria;
        }
        return view('carta.carta', compact('categorias', 'categoriaSeleccionada'));             // Pasar las categorías y la categoría seleccionada a la vista
    }


    // FUNCION AÑADIR AL CARRITO
    public function anadircarrito(Request $request, $id_producto)
    {
        $user_id = Auth::User()->id;
        $producto_id = $id_producto;
        $cantidad = $request->cantidad;
        $carrito = new Carrito();
        $carrito->user_id = $user_id;
        $carrito->id_producto = $producto_id;
        $carrito->cantidad = $cantidad;
        $carrito->save();

        return redirect()->back();
    }


    // FUNCION VER CARRITO
    public function vercarrito(Request $request, $user_id)
    {
        $precioTotalCarrito = DB::table('carritos')
            ->join('productos', 'carritos.id_producto', '=', 'productos.id_producto')
            ->where('carritos.user_id', $user_id)
            ->sum(DB::raw('productos.precio_producto * carritos.cantidad'));

        $carrito = Carrito::where('user_id', $user_id)
            ->join('productos', 'carritos.id_producto', '=', 'productos.id_producto')
            ->select('carritos.*', 'productos.nombre_producto', 'productos.precio_producto', 'productos.descripcion_producto')
            ->get();
        return view('vercarrito', ['carrito' => $carrito, 'precioTotalCarrito' => $precioTotalCarrito]);
    }


    // FUNCION ELIMINAR DEL CARRITO
    public function eliminarDelCarrito($id)
    {
        Carrito::findOrFail($id)->delete();     // Encuentra y elimina el producto del carrito
        return redirect()->back()->with('success', 'Producto eliminado del carrito correctamente.');    // Redirecciona de vuelta al carrito después de eliminar el producto
    }
}
