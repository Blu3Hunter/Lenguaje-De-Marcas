<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/**
 *  Todas las rutas de la aplicación van conectadas a ciertos controladores.
 *  En este caso, el controlador principal es el "AdminController" el cual
 *  gestiona todo el tema de las peticiónes de cambio de vistas y 
 *  las peticiones de: borrar, editar y añadir producto.
 */

route::get('/redirect', [HomeController::class,'redirect']);

route::get('/view_category', [AdminController::class,'view_category']);

route::post('/add_category', [AdminController::class,'add_category']);

route::get('/delete_category/{id}', [AdminController::class,'delete_category']);

route::get('/view_product', [AdminController::class,'view_product']);

route::post('/add_product', [AdminController::class,'add_product']);

route::get('/show_product', [AdminController::class,'show_product']);

route::get('/delete_product/{id}', [AdminController::class,'delete_product']);

route::get('/update_product/{id}', [AdminController::class,'update_product']);
