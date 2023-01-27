<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\ProfessorController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Students;
use App\Http\Controllers\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// USER

route::post('register', [UserController::class, 'register']); // REGISTRO USER
route::post('login', [UserController::class, 'login']); // LOGIN USER


Route::group(['middleware' => ["auth:sanctum"]], function () { // AUTH USER (Se necesita un token válido)




    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::post('readUser', [UserController::class, 'readUser']);


    Route::group(['middleware' => ['permission:student-admin']], function () { // PERMISO MODIFICAR STUDENT
        Route::post('insertStudent', [Students::class, 'insertStudent']);
        Route::post('deleteStudent', [Students::class, 'deleteStudent']);
        Route::post('updateStudent', [Students::class, 'updateStudent']);
    });

    Route::group(['middleware' => ['permission:read-student']], function () { // PERMISO LEER STUDENT
        Route::post('readStudent', [Students::class, 'readStudent']);
    });


    Route::group(['middleware' => ['permission:course-admin']], function () { // PERMISO MODIFICAR COURSE
        Route::post('insertCourse', [Courses::class, 'insertCourse']);
        Route::post('deleteCourse', [Courses::class, 'deleteCourse']);
        Route::post('updateCourse', [Courses::class, 'updateCourse']);
    });
    Route::group(['middleware' => ['permission:read-course']], function () { // PERMISO LEER CURSO
        Route::post('readCourse', [Courses::class, 'readCourse']);
    });


    Route::group(['middleware' => ['permission:teacher-admin']], function () { // PERMISO MODIFICAR PROFESSOR
        Route::post('insertTeacher', [Teachers::class, 'insertTeacher']);
        Route::post('deleteTeacher', [Teachers::class, 'deleteTeacher']);
        Route::post('updateTeacher', [Teachers::class, 'updateTeacher']);
    });
    Route::group(['middleware' => ['permission:read-teacher']], function () { // PERMISO LEER PROFESSOR
        Route::post('readTeacher', [Teachers::class, 'readTeacher']);
    });



});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
