<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;

     // Nom de la table
     protected $table = 'lieus';

     // Colonnes remplissables
     protected $fillable = [
         'nom', 'adresse', 'ville', 'pays',
     ];

     // Si vous ne voulez pas de timestamps (created_at, updated_at)
     public $timestamps = false;

     // Relations éventuelles
     // Exemple : Relation One-to-Many avec la table des concerts
     public function concerts()
     {
         return $this->hasMany(Concert::class);
     }
}
