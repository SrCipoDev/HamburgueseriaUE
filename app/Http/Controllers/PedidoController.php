<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Pedidos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{


    public function index()
    {
        // Code to handle the request goes here
        return view('pedidos.index'); // Assuming you want to return a view named anadircarrito
    }

    public function anadirCarrito(Request $request, $id)
    {
            $user_id = Auth::user()->id;
            $cantidad = $request->input('cantidad');
            $pedido = new Pedidos();
            $pedido->user_id = $user_id;
            $pedido->id_producto = $id;
            $pedido->cantidad = $cantidad;
            $pedido->save();
            
            return redirect()->back();
    }

 /*    public function show($nombre_producto)
    {
        $producto = Producto::where('nombre_producto', $nombre_producto)->first();
        //Al estar utilizando el nombre para las urls en lugar del id, hay que ponerlo así
        return view('productos.show', compact('producto'));
    } */
}