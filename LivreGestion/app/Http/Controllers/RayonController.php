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
 
}
