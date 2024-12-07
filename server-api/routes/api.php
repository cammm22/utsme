<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ClientController;

// Rute API untuk Items
Route::apiResource('items', ItemController::class);

// Rute API untuk Clients
Route::apiResource('clients', ClientController::class);
