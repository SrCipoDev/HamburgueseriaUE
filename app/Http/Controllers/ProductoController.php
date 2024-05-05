<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get(); // Recupera todos los productos con sus categorías
        return view('productos.index', compact('categorias')); // Pasa las categorías a la vista
    }
    public function create()
    {
        return view('productos.create');
    }

    public function storage(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required',
            //es con un símbolo igual, fuerza que no se deje vacía
            'descripcion_producto' => 'required'
        ]);

        $producto = new Producto();

        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;

        $producto->save();
        return redirect()->route('productos.show', ['nombre_producto' => $producto->nombre_producto]);
        //redirecciona al producto recien creada
    }

    public function show($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        //Al estar utilizando el nombre para las urls en lugar del id, hay que ponerlo así
        return view('productos.show', compact('producto'));
    }

    public function edit($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        return view('productos.edit', compact('producto'));
    }

    /*** Update the specified resource in storage.*/
    public function update(Request $request, $nombre_producto)
    {

        $request->validate([
            'nombre_producto' => 'required',
            'descripcion_producto' => 'required'    //es con un símbolo igual, fuerza que no se deje vacía
        ]);

        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->save();
        return redirect()->route('productos.show', ['nombre_producto' => $producto->nombre_producto]);
    }

    // AÑADIDO PARA EL FICHERO CARTA.BLADE.PHP
    public function __invoke()
    {
        // Obtener las categorías que se mostrarán en la carta
        $productos = Producto::all();

        // Pasar las categorías a la vista
        return view('carta', compact('categorias'));
    } // FIN  DE LA VISTA CARTA
}
