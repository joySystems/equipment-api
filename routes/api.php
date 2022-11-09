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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/equipment', function (Request $request) {
    return "hello!";
});


Route::get('/equipment/{id}', function (Request $request) {
    return $request->user();
});

Route::post('/equipment', function (Request $request) {
    return $request->user();
});

Route::put('/equipment/{id}', function (Request $request) {
    return $request->user();
});

Route::delete('/equipment/{id}', function (Request $request) {
    return $request->user();
});
