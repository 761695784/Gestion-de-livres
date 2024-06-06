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
        'rayon_id',
        'categorie_id',
        

    ];
}
