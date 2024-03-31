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


// Route::get('/', IndexController::class)->name('index');


// Route::controller(CategoriaController::class)->group(function () {
//    Route::get('categorias',                'index')->name('categorias.index');
//    Route::get('categorias/create',         'create')->name('categorias.create');
//    Route::get('categorias/{nombre_categoria}',    'show')->name('categorias.show');
//    Route::post('categorias', 'storage')->name('categorias.storage');
// });
