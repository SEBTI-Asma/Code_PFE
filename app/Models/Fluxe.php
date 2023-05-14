<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fluxe extends Model
{
    use HasFactory;
    public function demande(){
        
        return $this->belongsTo(Demande::class, "demande_id", "id");
    }
}
