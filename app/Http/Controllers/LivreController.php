<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
         'image' => 'required|',
         'titre' => 'required|string|max:50',
         'auteur' => 'required|string|max:20',
         'editeur' => 'required|string|max:30',
         'nbre_page' => 'required|integer',
         'isbn' => 'required|string|max:13|unique:livres,isbn',
         'statut' => 'required|string|max:20',
         'rayon_id' => 'required|exists:rayons,id',
         'categorie_id' => 'nullable|exists:categories,id',
         'date_publication' => 'required|date',
     ]);
 
     $livre= new Livre();
     $livre->image = $request->image;
     $livre->titre = $request->titre;
     $livre->auteur = $request->auteur;
     $livre->editeur = $request->editeur;
     $livre->nbre_page = $request->nbre_page;
     $livre->isbn = $request->isbn;
     $livre->statut = $request->statut;
     $livre->rayon_id = $request->rayon_id;
     $livre->categorie_id = $request->categorie_id;
     $livre->date_publication = $request->date_publication;
   
     $livre->save();
      return redirect('/liste')->with('status', 'Le livre a été ajouté avec succès.');
   }

   public function modifier($id)
   {
      $livre = Livre::with('categorie', 'rayon')->find($id); // Récupérer un seul livre // Récupérer un seul livre
     
       return view('Livres.modifier', compact('livre'));
   }



   public function modifier_traitement(Request $request){
      $request->validate([
         'image' =>'required',
         'titre' => 'required|string|max:50',
         'auteur' => 'required|string|max:20',
         'editeur' => 'required|string|max:30',
         'nbre_page' =>'required',
         'isbn' => 'required|string|max:13|unique:livres,isbn',
         'statut' => 'required|string|max:20',
         'rayon_id' =>'required',
         'categorie_id' =>'nullable',
         'date_publication' =>'required|date',
         
     ]);
      $livre = Livre::find($request->id);
      $livre->image = $request->image;
      $livre->titre = $request->titre;
      $livre->auteur = $request->auteur;
      $livre->editeur = $request->editeur;
      $livre->nbre_page = $request->nbre_page;
      $livre->isbn = $request->isbn;
      $livre->statut = $request->statut;
      $livre->rayon_id = $request->rayon_id;
      $livre->categorie_id = $request->categorie_id;
      $livre->date_publication = $request->date_publication;
      $livre->save();
      return redirect('/liste')->with('status', 'Le livre a été modifié avec succès.');
   }
   
   public function supprimer($id){
      $livre = Livre::find($id);
      $livre->delete();
      return redirect('/liste')->with('status', 'Le livre a été supprimé avec succès.');

   }







}
