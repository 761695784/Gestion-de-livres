<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;


Route::get('/', function () {
    return view('welcome');
});

// CRUD sur les LIVRES

Route::get('/liste', [LivreController::class, 'liste']);

Route::get('/ajouter', [LivreController::class, 'ajouter']);

Route::post('/ajouter_traitement', [LivreController::class, 'ajouter_traitement']);

Route::get('/modifier/{id}', [LivreController::class, 'modifier']);

Route::post('/modifier/modifier_traitement', [LivreController::class, 'modifier_traitement']);

Route::get('/supprimer/{id}', [LivreController::class, 'supprimer']);


//CRUD SUR les RAYONS

Route::get('/affiche_rayon', [RayonController::class, 'afficher']);


//CRUD SUR les CATEGORIES

Route::get('/afficher_categorie', [CategorieController::class, 'afficher_categorie']);


Route::get('/ajouter_categorie', [CategorieController::class, 'ajouter_categorie']);



Route::post('/ajouter_categorie_traitement', [CategorieController::class, 'ajouter_categorie_traitement']);

Route::get('/modif_categorie/{id}', [CategorieController::class, 'modifier']);

Route::post('/modifier_categorie_traitement/{id}', [CategorieController::class, 'modifier_traitement']);

Route::get('/supprimer_categorie/{id}', [CategorieController::class, 'supprimer']);