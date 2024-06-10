<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;


Route::get('/', [AuthController::class,'login'])->name('login');


Route::group(['middleware' => 'auth'],function(){
    

// CRUD sur les LIVRES

Route::get('/liste', [LivreController::class, 'liste']);

Route::get('/ajouter', [LivreController::class, 'ajouter']);

Route::post('/ajouter_traitement', [LivreController::class, 'ajouter_traitement']);

Route::get('/modifier/{id}', [LivreController::class, 'modifier']);

Route::post('/modifier/modifier_traitement', [LivreController::class, 'modifier_traitement']);

Route::get('/supprimer/{id}', [LivreController::class, 'supprimer']);


//CRUD SUR les RAYONS

Route::get('/affiche_rayon', [RayonController::class, 'afficher']);

Route::get('/ajout_rayon', [RayonController::class, 'ajouter_rayon']);

Route::post('/ajout_rayon_traitement', [RayonController::class, 'ajouter_rayon_traitement']);

Route::get('/modif_rayon/{id}', [RayonController::class,'modifier']);

Route::post('/modif_rayon_traitement/{id}', [RayonController::class, 'modifier_traitement']);

Route::get('/supprimer_rayon/{id}', [RayonController::class, 'supprimer']);


//CRUD SUR les CATEGORIES

Route::get('/afficher_categorie', [CategorieController::class, 'afficher_categorie']);


Route::get('/ajouter_categorie', [CategorieController::class, 'ajouter_categorie']);



Route::post('/ajouter_categorie_traitement', [CategorieController::class, 'ajouter_categorie_traitement']);

Route::get('/modif_categorie/{id}', [CategorieController::class, 'modifier']);

Route::post('/modifier_categorie_traitement/{id}', [CategorieController::class, 'modifier_traitement']);

Route::get('/supprimer_categorie/{id}', [CategorieController::class, 'supprimer']);

Route::delete('/logout', [AuthController::class,'logout'])->name('logout');


});


Route::group(['middleware' => 'guest'],function(){

// PARTIE AUTHENTIFICATION
Route::get('/register', [AuthController::class,'register'])->name('register');

Route::post('/register', [AuthController::class,'registerAdd'])->name('register');

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::post('/login', [AuthController::class,'loginPost'])->name('login');

});