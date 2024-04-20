<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'lieu_id', 'prix',
    'photo',
    'description',
    'date_debut',
    'date_fin',];

    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }

    public function artistes()
    {
        return $this->belongsToMany(Artiste::class);
    }
    public function billets()
    {
    return $this->hasMany(Billet::class);
    }
    public function category()
{
    return $this->belongsToMany(category::class , 'category_concert', 'concert_id', 'categorie_id');
}


}
