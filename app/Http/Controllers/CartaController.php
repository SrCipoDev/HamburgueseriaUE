<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    public function __invoke()
    {
        return view('carta');
    }
}
