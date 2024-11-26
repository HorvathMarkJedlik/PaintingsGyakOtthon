<?php

use App\Http\Controllers\PaintingController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'paintings');
Route::get('/paintings', [PaintingController::class, 'index']);
Route::get('/paintings/{title}', [PaintingController::class, 'show']);
Route::get('/artists', [PaintingController::class, 'artists']);
