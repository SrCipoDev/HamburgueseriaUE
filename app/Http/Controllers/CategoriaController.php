<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {

        $categorias = Categoria::paginate(3);

        return view('categorias.index', compact('categorias'));
    }

    public function create(){
        return view('categorias.create');
    }

    public function storage(Request $request){
        $categoria = new Categoria();

        $categoria->nombre_categoria = $request->nombre_categoria;
        $categoria->descripcion_categoria = $request->descripcion_categoria;

        $categoria->save();
        return redirect()->route('categorias.create');
    }

/*     public function show($nombre_categoria){
        $categoria = Categoria::find($nombre_categoria);
    
        return view('categorias.show', compact('nombre_categoria')) ;
    } */
    public function show($nombre_categoria) {
        $categoria = Categoria::where('nombre_categoria', $nombre_categoria)->first();
        
        return view('categorias.show', compact('categoria'));
    }
    
}
