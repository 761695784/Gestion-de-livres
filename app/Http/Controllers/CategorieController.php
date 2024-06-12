<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{


    public function afficher_categorie(){
        $categories = Categorie::all();
        return view('Categories.afficher_categorie', compact('categories'));
    }
   public function ajouter_categorie(){
    return view('Categories.ajouter_categorie');
   }


   public function ajouter_categorie_traitement(Request $request){

    $request->validate([
        'libelle' => 'required|string|max:25|',
        'description' =>'required|string|max:200|',
    ]);
    $categorie = new Categorie();
    $categorie->libelle = $request->libelle;
    $categorie->description = $request->description;
    $categorie->save();
    return redirect()->back()->with('status', 'Categorie ajoutée avec succès');
   
}
    public function modifier($id){
        $categorie = Categorie::find($id);
        return view('Categories.modif_categorie', compact('categorie'));
    }

    public function modifier_traitement(Request $request){
        $request->validate([
            'libelle' => 'required|string|max:25|',
            'description' =>'required|string|max:200|',
        ]);
        $categorie = Categorie::find($request->id);
        $categorie->libelle = $request->libelle;
        $categorie->description = $request->description;
        $categorie->save();
        return redirect('/afficher_categorie')->with('status', 'La categorie a été modifiée avec succès.');
    }

    public function supprimer($id){
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect('/afficher_categorie')->with('status', 'La categorie a été supprimée avec succès.');
    }






 }
