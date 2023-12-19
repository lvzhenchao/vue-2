<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('todos', function () {
    return response()->json([
        ['id'=>1, 'title'=>'Learn Vue js', 'completed' => false],
        ['id'=>2, 'title'=>'Go to Shop', 'completed' => false],
    ]);
})->middleware('api');
