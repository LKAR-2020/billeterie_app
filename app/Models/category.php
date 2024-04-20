<?php

namespace App\Models;

use App\Models\Concert;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['nom',
    'color',
    'description',];
    public function concerts()
{
    return $this->belongsToMany(Concert::class, 'category_concert', 'categorie_id', 'concert_id');
}

}
