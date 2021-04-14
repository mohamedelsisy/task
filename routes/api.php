<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



Route::get('/products', [ProductController::class , 'index']);

Route::get('/task1', [ProductController::class , 'task1']);
Route::get('/task2', [ProductController::class , 'task2']);
Route::get('/task3', [ProductController::class , 'task3']);
Route::get('/task4', [ProductController::class , 'task4']);
Route::get('/task5', [ProductController::class , 'task5']);


Route::post('/products', [ProductController::class , 'store']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
