<?php

use App\Http\Controllers\DimensionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\MatelasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/marques', [MarqueController::class, 'index']);
Route::get('/marques/creer', [MarqueController::class, 'create']);
Route::post('/marques/creer', [MarqueController::class, 'store']);
Route::get('/marques/{id}/supprimer', [MarqueController::class, 'destroy']);

Route::get('/dimensions', [DimensionsController::class, 'index']);
Route::get('/dimensions/creer', [DimensionsController::class, 'create']);
Route::post('/dimensions/creer', [DimensionsController::class, 'store']);
Route::get('/dimensions/{id}/supprimer', [DimensionsController::class, 'destroy']);

Route::get('/matelas', [MatelasController::class, 'index']);
Route::get('/matelas/creer', [MatelasController::class, 'create']);
Route::post('/matelas/creer', [MatelasController::class, 'store']);
Route::get('/matelas/{id}', [MatelasController::class, 'show']);
Route::get('/matelas/{id}/modifier', [MatelasController::class, 'edit']);
Route::post('/matelas/{id}/modifier', [MatelasController::class, 'update']);
Route::get('/matelas/{id}/supprimer', [MatelasController::class, 'destroy']);
