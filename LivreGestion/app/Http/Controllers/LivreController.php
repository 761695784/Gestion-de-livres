<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller


{
   public function liste()
   {
      $livres = Livre::with('categorie', 'rayon')->get();
      return view('Livres.liste', compact('livres'));
   }

   public function ajouter()
   {
      return view('Livres.ajouter');
   }

   public function ajouter_traitement(Request $request)
   {
      $request->validate([
         'image' =>'required',
         'titre' =>'required',
         'auteur' =>'required',
         'editeur' =>'required',
         'nbre_page' =>'required',
         'isbn' =>'required',
         'rayon_id' =>'required',
         'categorie_id' =>'nullable',
         'date_publication' =>'required|date',
         
     ]);
 
     $livre= new Livre();
     $livre->image = $request->image;
     $livre->titre = $request->titre;
     $livre->auteur = $request->auteur;
     $livre->editeur = $request->editeur;
     $livre->nbre_page = $request->nbre_page;
     $livre->isbn = $request->isbn;
     $livre->rayon_id = $request->rayon_id;
     $livre->categorie_id = $request->categorie_id;
     $livre->date_publication = $request->date_publication;
   
     $livre->save();
      return redirect('/liste')->with('status', 'Le livre a été ajouté avec succès.');
   }
}
