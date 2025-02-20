<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\VistaController;


Route::get('/inicio', [VistaController::class, 'index']);
Route::get('/login', [VistaController::class, 'login']);
Route::get('/crear', [VistaController::class, 'store']);
