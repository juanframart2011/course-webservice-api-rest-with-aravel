<?php

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
use App\Http\Controllers\CategoriaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('categoria', [CategoriaController::class, 'getCategoria'])->name( "categoria" );
Route::post('categoria', [CategoriaController::class, 'insertCategoria'])->name( "categoria" );
Route::delete('categoria/{id}', [CategoriaController::class, 'deleteCategoria'])->name( "categoria" );
Route::put('categoria/{id}', [CategoriaController::class, 'updateCategoria'])->name( "categoria" );

Route::get('categoria/{id}', [CategoriaController::class, 'getCategoriaId'])->name( "categoria" );