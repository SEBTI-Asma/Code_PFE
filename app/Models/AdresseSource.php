<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdresseSource extends Model
{
    use HasFactory;
    public function fluxe(){
        
        return $this->belongsTo(Fluxe::class, "fluxe_id", "id");
    }
}
