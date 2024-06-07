<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date_publication'); // Type date pour 'date_publication'
            $table->string('nbre_page');
            $table->string('auteur');
            $table->string('isbn')->unique(); // Ajout de la contrainte unique sur 'isbn'
            $table->string('editeur');
            $table->foreignId('rayon_id')->constrained('rayons')->onDelete('cascade');
            $table->foreignId('categorie_id')->nullable()->constrained('categories')->onDelete('set null'); // Rendre 'categorie_id' nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
