<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function afficher()
    {
       $rayons = Rayon::all();
       return view('Rayons.affiche_rayon', compact('rayons'));
    }


    public function ajouter_rayon(){
        return view('Rayons.ajout_rayon');
    }

    public function ajouter_rayon_traitement(Request $request){
        $request->validate([
            'libelle' => 'required|string|max:25|',
            'partie' => 'required|string|max:100',
        ]);
        $rayon = new Rayon();
        $rayon->libelle = $request->libelle;
        $rayon->partie = $request->partie;
        $rayon->save();
        return redirect('/affiche_rayon')->with('status', 'Rayon ajouté avec succès');
    }

    public function modifier($id){
        $rayon = Rayon::find($id);
        return view('Rayons.modif_rayon', compact('rayon'));
    }

    public function modifier_traitement(Request $request){
        $request->validate([
               'libelle' => 'required|string|max:25|',
            'partie' => 'required|string|max:100',
        ]);
        $rayon = Rayon::find($request->id);
        $rayon->libelle = $request->libelle;
        $rayon->partie = $request->partie;
        $rayon->save();
        return redirect('/affiche_rayon')->with('status', 'Rayon modifié avec succès');
    }

    public function supprimer($id){
        $rayon = Rayon::find($id);
        $rayon->delete();
        return redirect('/affiche_rayon')->with('status', 'Rayon supprimé avec succès');
    }
 
}
