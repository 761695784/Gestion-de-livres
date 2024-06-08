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
            'libelle' =>'required',
            'partie' =>'required',
        ]);
        $rayon = new Rayon();
        $rayon->libelle = $request->libelle;
        $rayon->partie = $request->partie;
        $rayon->save();
        return redirect('/affiche_rayon')->with('status', 'Rayon ajouté avec succès');
    }
 
}
