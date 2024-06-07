<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/liste', [LivreController::class, 'liste']);