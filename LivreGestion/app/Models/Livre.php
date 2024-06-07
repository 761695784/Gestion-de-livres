<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livre extends Model
{
    protected $fillable = [
        'titre',
        'date_publication',
        'nbre_page',
        'auteur',
        'isbn',
        'editeur',
        'image',
        'rayon_id',
        'categorie_id',

    ];
        public function categorie(){
            return $this->belongsTo(Categorie::class, 'categorie_id');
        }

        public function rayon(){
            return $this->belongsTo(Rayon::class, 'rayon_id');
        }

}
