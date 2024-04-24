<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::paginate(4);
        //Cuantas categorías se muestran por página

        return view('categorias.index', compact('categorias'));
    }

    public function create(){
        return view('categorias.create');
    }

    public function storage(Request $request){
        $request->validate([
            'nombre_categoria'=>'required',
            //es con un símbolo igual, fuerza que no se deje vacía
            'descripcion_categoria'=>'required'
        ]);

        $categoria = new Categoria();

        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->descripcion_categoria = $request->descripcion_categoria;

        $categoria->save();
        return redirect()->route('categorias.show', ['nombre_categoria' => $categoria->nombre_categoria]);
        //redirecciona a la categoria recien creada
    }


    public function show($nombre_categoria) {
        $categoria = Categoria::where('nombre_categoria', $nombre_categoria)->first();
        //Al estar utilizando el nombre para las urls en lugar del id, hay que ponerlo así

        return view('categorias.show', compact('categoria'));
    }
    
    public function edit ($nombre_categoria){
        $categoria = Categoria::where('nombre_categoria', $nombre_categoria)->first();
        return view('categorias.edit', compact('categoria'));
    }
    public function update(Request $request, $nombre_categoria) {

        $request->validate([
            'nombre_categoria'=>'required',
            //es con un símbolo igual, fuerza que no se deje vacía
            'descripcion_categoria'=>'required'
        ]);

        $categoria = Categoria::where('nombre_categoria', $nombre_categoria)->first();
        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->descripcion_categoria = $request->descripcion_categoria;
        $categoria->save();
        return redirect()->route('categorias.show', ['nombre_categoria' => $categoria->nombre_categoria]);
    }
    
    public function destroy(Categoria $categoria) {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}