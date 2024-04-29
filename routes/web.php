<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartaController;          /*AÑADIDO POR NEREA PARA MOSTRAR ARCHIVO carta.blade.php*/

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// RUTAS PARA INDEX
Route::get('/', IndexController::class)->name('index');

// RUTA PARA PAGINA CARTA
Route::get('/carta', [CartaController::class, 'index'])->name('carta.index');

// RUTAS PARA LAS VISTAS DE CATEGORIAS
Route::controller(CategoriaController::class)->group(function () {
   Route::get('categorias',                           'index')->name('categorias.index');
   Route::get('categorias/create',                    'create')->name('categorias.create');
   Route::get('categorias/{nombre_categoria}',        'show')->name('categorias.show');
   Route::post('categorias',                          'storage')->name('categorias.storage');
   Route::get('categorias/{nombre_categoria}/edit',   'edit')->name('categorias.edit');
   Route::put('categorias/{nombre_categoria}',        'update')->name('categorias.update');
});

// RUTAS PARA LAS VISTAS DE INGREDIENTES
Route::controller(IngredienteController::class)->group(function () {
   Route::get('ingredientes',                               'index')->name('ingredientes.index');
   Route::get('ingredientes/create',                        'create')->name('ingredientes.create');
   Route::get('ingredientes/{nombre_ingrediente}',          'show')->name('ingredientes.show');
   Route::post('ingredientes',                              'storage')->name('ingredientes.storage');
   Route::get('ingredientes/{nombre_ingrediente}/edit',     'edit')->name('ingredientes.edit');
   Route::put('ingredientes/{nombre_ingrediente}',          'update')->name('ingredientes.update');
});

// RUTAS PARA LAS VISTAS DE AUTENTIFICACION -- LOGIN -- REGISTER 
Route::controller(LoginRegisterController::class)->group(function () {
   Route::get('/register', 'register')->name('register');
   Route::post('/store', 'store')->name('store');
   Route::get('/login', 'login')->name('login');
   Route::post('/authenticate', 'authenticate')->name('authenticate');
   Route::get('/dashboard', 'dashboard')->name('dashboard');
   Route::post('/logout', 'logout')->name('logout');
});

// RUTAS PARA LAS VISTAS DE PRODUCTOS
Route::controller(ProductoController::class)->group(function () {
   Route::get('producto',                           'index')->name('producto.index');
   Route::get('producto/create',                    'create')->name('producto.create');
   Route::get('producto/{nombre_producto}',        'show')->name('producto.show');
   Route::post('producto',                          'storage')->name('producto.storage');
   Route::get('producto/{nombre_producto}/edit',   'edit')->name('producto.edit');
   Route::put('producto/{nombre_producto}',        'update')->name('producto.update');
});

// RUTA PARA LA PAGINA DE ADMINISTRACION 
Route::get('/admin', function () {
   return view('admin.index');
})->name('admin.index');
