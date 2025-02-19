<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\VistaController;


Route::get('/inicio', [VistaController::class, 'index']);
