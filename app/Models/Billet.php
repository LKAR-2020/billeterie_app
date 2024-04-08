<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;

    protected $fillable = ['concert_id','user_id', 'prix', 'qr_code'];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
