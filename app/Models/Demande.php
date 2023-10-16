<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
        'archivee',
        'objet_demande',
        'suivie',
        'annulee',
        
    ];

    public function fluxe(){

        return $this->hasMany(Fluxe::class);
    }

    public function user(){

        return $this->belongsTo(User::class, "user_id", "id");
    }
}

