<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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