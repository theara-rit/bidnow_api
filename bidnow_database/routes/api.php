<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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


// category
Route::get('category/',[CategoryController::class,'index']);
Route::post('category/',[CategoryController::class,'store']);
Route::put('category/{id}',[CategoryController::class,'update']);
Route::delete('category/{id}',[CategoryController::class,'destroy']);

// post
Route::get('posts/',[PostController::class,'index']);
Route::post('posts/',[PostController::class,'store']);
Route::delete('post/{id}',[PostController::class,'destroy']);
Route::put('post/{id}',[PostController::class,'update']);


// page
Route::get('pages/',[PageController::class,'index']);
Route::post('pages/',[PageController::class,'store']);



