<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;


class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::paginate(10);
        //Nº ingredientes por página

        return view('ingredientes.index', compact('ingredientes'));
    }

    public function create()
    {
        return view('ingredientes.create');
    }

    public function storage(Request $request)
    {
        $request->validate([
            'nombre_ingrediente' => 'required',
            'descripcion_ingrediente' => 'required'
        ]);

        $ingrediente = new Ingrediente();

        $ingrediente->nombre_ingrediente = $request->nombre_ingrediente;
        $ingrediente->descripcion_ingrediente = $request->descripcion_ingrediente;

        $ingrediente->save();
        return redirect()->route('ingredientes.show', ['nombre_ingrediente' => $ingrediente->nombre_ingrediente]);
        //redirecciona a la Ingrediente recien creada
    }


    public function show($nombre_ingrediente)
    {
        $ingrediente = Ingrediente::where('nombre_ingrediente', $nombre_ingrediente)->first();
        //Al estar utilizando el nombre para las urls en lugar del id, hay que ponerlo así

        return view('ingredientes.show', compact('ingrediente'));
    }

    public function edit($nombre_ingrediente)
    {
        $ingrediente = Ingrediente::where('nombre_ingrediente', $nombre_ingrediente)->first();
        return view('ingredientes.edit', compact('ingrediente'));
    }
    public function update(Request $request, $nombre_ingrediente)
    {

        $request->validate([
            'nombre_ingrediente' => 'required',
            'descripcion_ingrediente' => 'required'
        ]);

        $ingrediente = Ingrediente::where('nombre_ingrediente', $nombre_ingrediente)->first();
        $ingrediente->nombre_ingrediente = $request->nombre_ingrediente;
        $ingrediente->descripcion_ingrediente = $request->descripcion_ingrediente;
        $ingrediente->save();
        return redirect()->route('ingredientes.show', ['nombre_ingrediente' => $ingrediente->nombre_ingrediente]);
    }
}
