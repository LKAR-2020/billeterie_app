<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'date', 'lieu_id', 'prix'];

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

}
