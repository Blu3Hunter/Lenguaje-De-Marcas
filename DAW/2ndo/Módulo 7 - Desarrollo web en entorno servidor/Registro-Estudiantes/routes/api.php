<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Students;
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



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => ["auth:sanctum"]], function () {

    //POST

    Route::post('insert-student', [Students::class, 'insertStudent']);
    Route::post('update-student', [Students::class, 'updateSudent']);
    Route::post('delete-student', [Students::class, 'deleteStudent']);


    //GET

    Route::get('read-student', [Students::class, 'readStudent']);
});
