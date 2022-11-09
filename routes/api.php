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


Route::get('/equipment', [App\Http\Controllers\EquipmentController::class, 'index']);


Route::get('/equipment/{id}', [App\Http\Controllers\EquipmentController::class, 'show']);

Route::post('/equipment', [App\Http\Controllers\EquipmentController::class, 'store']);

Route::put('/equipment/{id}', [App\Http\Controllers\EquipmentController::class, 'update']);

Route::delete('/equipment/{id}', [App\Http\Controllers\EquipmentController::class, 'delete']);


Route::get('/equipment-type', [App\Http\Controllers\EquipmentTypeController::class, 'index']);

