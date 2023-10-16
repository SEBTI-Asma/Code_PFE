<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocole extends Model
{
    use HasFactory;
    public function fluxe(){
        
        return $this->hasMany(Fluxe::class);
    }
}
