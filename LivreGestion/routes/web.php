<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/liste', [LivreController::class, 'liste']);

Route::get('/ajouter', [LivreController::class, 'ajouter']);

Route::post('/ajouter_traitement', [LivreController::class, 'ajouter_traitement']);

Route::get('/modifier/{id}', [LivreController::class, 'modifier']);

Route::post('/modifier/modifier_traitement', [LivreController::class, 'modifier_traitement']);

Route::get('/supprimer/{id}', [LivreController::class, 'supprimer']);