<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoriaController;

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
// Rutas para ver las vistas de admin
Route::prefix('admin')->group(function () {
   Route::get('/productos', function () {
      return view('admin.productos');
   });

   Route::get('/producto/editar', function () {
      return view('admin.producto-edit');
   });

   Route::get('/categorias', function () {
      return view('admin.categorias');
   });
   Route::get('/categoria/editar', function () {
      return view('admin.categoria-edit');
   });

   Route::get('/opciones', function () {
      return view('admin.opciones');
   });
});


Route::get('/', IndexController::class)->name('index');


Route::get('/', IndexController::class)->name('index');
Route::controller(CategoriaController::class)->group(function () {
   Route::get  ('categorias',                           'index')     ->name('categorias.index');
   Route::get  ('categorias/create',                    'create')    ->name('categorias.create');
   Route::get  ('categorias/{nombre_categoria}',        'show')      ->name('categorias.show');
   Route::post ('categorias',                          'storage')    ->name('categorias.storage');
   Route::get  ('categorias/{nombre_categoria}/edit',   'edit')      ->name('categorias.edit');
   Route::put  ('categorias/{nombre_categoria}',        'update')    ->name('categorias.update');
});

Route::controller(IngredienteController::class)->group(function () {
   Route::get  ('ingredientes',                               'index')     ->name('ingredientes.index');
   Route::get  ('ingredientes/create',                        'create')    ->name('ingredientes.create');
   Route::get  ('ingredientes/{nombre_ingrediente}',          'show')      ->name('ingredientes.show');
   Route::post ('ingredientes',                              'storage')    ->name('ingredientes.storage');
   Route::get  ('ingredientes/{nombre_ingrediente}/edit',     'edit')      ->name('ingredientes.edit');
   Route::put  ('ingredientes/{nombre_ingrediente}',          'update')    ->name('ingredientes.update');
});
