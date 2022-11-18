<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);



Route::group(['middleware' => ["auth:sanctum"]], function () {
    //rutas

    //get

    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('read-product', [ProductController::class, 'readProduct']);

    Route::get('read-category', [CategoryController::class, 'readCategory']);


    //post
    Route::post('insert-product', [ProductController::class, 'insertProduct']);
    Route::post('delete-product', [ProductController::class, 'deleteProduct']);
    Route::post('update-product', [ProductController::class, 'updateProduct']);

    Route::post('insert-category', [CategoryController::class, 'insertCategory']);
    Route::post('delete-category', [ProductController::class, 'deleteCategory']);
    Route::post('update-category', [ProductController::class, 'updateCategory']);
    
});
