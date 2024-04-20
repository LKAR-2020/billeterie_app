<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'genre_musical',
    'photo',
    'prenom',
    'blaze',
];

    public function concerts()
    {
        return $this->belongsToMany(Concert::class, 'artiste_concert');
    }
}
