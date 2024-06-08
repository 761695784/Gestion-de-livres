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
    
    
        Schema::table('livres', function (Blueprint $table) {
            $table->integer('nbre_page')->change();
        });
    }

    public function down(): void
    {
        Schema::table('livres', function (Blueprint $table) {
            $table->string('nbre_page')->change();
        });
    }
};
