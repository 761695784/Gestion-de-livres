<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller


{
   public function liste(){
      $livres = Livre::with('categorie', 'rayon')->get();
       return view('Livres.liste',compact('livres'));
   }
}
