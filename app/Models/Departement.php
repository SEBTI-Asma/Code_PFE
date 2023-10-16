<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    public function user(){

        return $this->hasMany(User::class);
    }

    public function fluxe(){
        
        return $this->hasMany(Departement::class);
    }
}
