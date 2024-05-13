<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Pedidos;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    // FUNCIÓN INDEX
    public function index()
    {
        $productos = Producto::all();/* with('categoria')->get(); */ // Recupera todos los productos con sus categorías
        return view('productos.index', compact('productos')); // Pasa las categorías a la vista
    }

    //FUNCIÓN CREATE
    public function create()
    {
        $producto = Producto::all();
        $categorias = Categoria::all();
        return view('productos.create', compact('producto', 'categorias'));
    }

    //FUNCIÓN STORAGE
    public function storage(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required',
            //es con un símbolo igual, fuerza que no se deje vacía
            'descripcion_producto' => 'required',
            'precio_producto' => 'required|numeric|min:0'
        ]);

        $producto = new Producto();

        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->id_categoria = $request->id_categoria;



        $producto->save();
        return redirect()->route('productos.index');
        //redirecciona al producto recien creada
    }

    // FUNCION SHOW
    public function show($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();        //Al estar utilizando el nombre para las urls en lugar del id, hay que ponerlo así
        return view('productos.show', compact('producto'));
    }

    // FUNCION EDIT
    public function edit($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }


    // FUNCION UPDATE
    public function update(Request $request, $nombre_producto)
    {

        $request->validate([
            'nombre_producto' => 'required',
            'descripcion_producto' => 'required',    //es con un símbolo igual, fuerza que no se deje vacía
            'precio_producto' => 'required|numeric|min:0', // Validación para el precio
            'id_categoria' => 'required',
        ]);

        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->id_categoria = $request->id_categoria;



        $producto->save();
        return redirect()->route('productos.index');
        //return redirect()->route('productos.show', ['nombre_producto' => $producto->nombre_producto]);
    }

    // FUNCION DESTROY
    public function destroy($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        $producto->delete();
        return redirect()->route('productos.index')
            ->withSuccess('Producto eliminado exitosamente.');
    }

    /*     public function anadirCarrito(Request $request, $id)
    {
            $user_id = Auth::user()->id;
            $cantidad = $request->input('cantidad');
            $pedido = new Pedidos();
            $pedido->user_id = $user_id;
            $pedido->id_producto = $id;
            $pedido->cantidad = $cantidad;
            $pedido->save();
            
            return redirect()->back();
    } */


    // AÑADIDO PARA EL FICHERO CARTA.BLADE.PHP
    public function __invoke()
    {
        $productos = Producto::all();                   // Obtener las categorías que se mostrarán en la carta
        return view('carta', compact('categorias'));    // Pasar las categorías a la vista
    }
}
