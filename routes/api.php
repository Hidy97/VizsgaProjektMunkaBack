<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/szavaks', [SzavakController::class,'index']);
Route::get('/szavaks/temas/', [SzavakController::class,'szavakTemaSzerint']);
Route::get('/temas', [TemaController::class,'index']);

Route::post('/temas', [TemaController::class,'store']);
Route::post('/szavaks', [SzavakController::class,'store']);