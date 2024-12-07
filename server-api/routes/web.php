<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ClientController;

Route::resource('items', ItemController::class);
Route::resource('clients', ClientController::class);
