<?php

use App\Http\Controllers\Api\CatalogoController;
use Illuminate\Support\Facades\Route;

Route::get('/catalogos', [CatalogoController::class, 'index']);
