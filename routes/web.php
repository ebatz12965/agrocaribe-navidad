<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusquedaController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [BusquedaController::class, 'index']);
Route::get('/buscar', [BusquedaController::class, 'buscar']);
Route::get('/mensaje/{id}', [BusquedaController::class, 'mensaje']);
