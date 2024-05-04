<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /*** Display a listing of the resource. */
    public function index()
    {
        $categorias = Categoria::all(); // Recupera todas las categorías
        return view('producto.index', compact('categorias')); // Pasa las categorías a la vista
    }


    /*** Show the form for creating a new resource. */
    public function create()
    {
        return view('producto.create');
    }

    /*** Store a newly created resource in storage.*/
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
        return redirect()->route('producto.show', ['nombre_producto' => $producto->nombre_producto]);
        //redirecciona a la categoria recien creada
    }

    /*** Display the specified resource.*/
    public function show($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        //Al estar utilizando el nombre para las urls en lugar del id, hay que ponerlo así
        return view('producto.show', compact('producto'));
    }

    /*** Show the form for editing the specified resource.*/
    public function edit($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        return view('producto.edit', compact('producto'));
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
        return redirect()->route('producto.show', ['nombre_producto' => $producto->nombre_producto]);
    }

    /*** Remove the specified resource from storage.*/
    /*public function destroy(string $id)
    {
        //
    }*/
}
