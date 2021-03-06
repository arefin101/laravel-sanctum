<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

Route::get('/products', [ProductController::class, 'index']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/find/{id}', [ProductController::class, 'show']);

Route::put('/find/{id}', [ProductController::class, 'update']);

Route::delete('/delete/{id}', [ProductController::class, 'destroy']);

Route::get('/search/{name}', [ProductController::class, 'search']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
