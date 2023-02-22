<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PesertasController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\UsercoursesController;
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
//admin
Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
  
//peserta
Route::get('pesertas/index/',[PesertasController::class,'index']);
Route::post('pesertas/store/',[PesertasController::class,'store']);
Route::post('pesertas/update/{id}', [PesertasController::class,'edit']);
Route::post('pesertas/destroy/{id}', [PesertasController::class,'delete']);

//category
Route::get('category/indexx/', [CategoryController::class, 'indexcatgor']);
Route::post('category/createdata/', [CategoryController::class, 'createdata']);
Route::post('category/update/{id}', [CategoryController::class, 'update']);
Route::post('category/destroy/{id}', [CategoryController::class, 'destroy']);
//barang
Route::Get('course/index/', [CoursesController::class, 'index']);
Route::post('course/create/', [CoursesController::class, 'create']);
Route::post('course/update/{id}', [CoursesController::class, 'update']);
Route::post('course/destroy/{id}', [CoursesController::class, 'destroy']);
Route::get('course/show/{id}', [CoursesController::class, 'show']);
Route::get('course/getcourseByKategori/{course_category_id}', [CoursesController::class, 'getCoursesCategory']);
//usercourse
Route::Get('uc/index/', [UsercoursesController::class, 'index']);
Route::post('uc/create/', [UsercoursesController::class, 'create']);
Route::post('uc/update/{id}', [UsercoursesController::class, 'update']);
Route::post('uc/destroy/{id}', [UsercoursesController::class, 'destroy']);
Route::get('uc/show/{id}', [UsercoursesController::class, 'show']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


