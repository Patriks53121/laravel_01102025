<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [BookController::class, 'show']);

Route::get('/create', [BookController::class, 'create']);

Route::post('/create/store', [BookController::class, 'store']);

Route::delete('/delete/{id}', [BookController::class, 'delete']);

Route::get('/edit/{id}', [BookController::class, 'edit']);

Route::put('/edit/update/{id}', [BookController::class, 'update']);

